<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Enums\AlignPosition;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Image as SpatieImage;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;


class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
        private $article_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->article_image_id);
        if (!$i){
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);
        
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google-credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();

        foreach ( $faces as $face){
            $vertices = $face->getBoundingPoly()->getVertices();

            $bound = [];
            foreach ($vertices as $vertex){
                $bound[] = [$vertex->getX(), $vertex->getY()];
            }
            $w = $bound[2][0] - $bound[0][0];
            $h = $bound[2][1] - $bound[0][1];

            $image = SpatieImage::load($srcPath);

            $image->watermark(
                base_path('resources/img/smile.jpg'),
                AlignPosition::TopLeft,
                paddingX: $bound[0][0],
                paddingY: $bound[0][1],
                width: $w,
                height: $h,
                fit: Fit::Stretch
            );
            $image->save($srcPath);
        }
        $imageAnnotator->close();
    }
}
