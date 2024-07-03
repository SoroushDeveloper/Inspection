<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function fileable(): MorphTo
    {
        return $this->morphTo('fileable', 'fileable_type', 'fileable_id');
    }

    public function status(): object
    {
        $image_array = ['jpg', 'JPG', 'JPEG', 'jpeg', 'gif', 'png'];
        $extension = explode('.', $this->nameFile);
        $extension = end($extension);
        $type = 'link';
        if (in_array($extension, $image_array)) {
            $type = 'image';
            $extension = 'image';
        }
        $icon = match ($extension) {
            'zip' => '/assets/file_icon/zip_file.png',
            'ZIP' => '/assets/file_icon/zip_file.png',
            'mp4', 'webm', 'F4V', 'vob', 'mkv', '3gp', 'flv', 'wmv', 'avi' => '/assets/file_icon/video.png',
            'pdf', 'PDF' => '/assets/file_icon/pdf_file.png',
            'file' => '/assets/file_icon/file.png',
            'stl', 'STL' => '/assets/file_icon/stl.png',
            'sldprt', 'SLDPRT' => '/assets/file_icon/sldprt.png',
            'xlsx', 'XLSX' => '/assets/file_icon/xlsx.png',
            'dwg', 'DWG' => '/assets/file_icon/dwg.png',
            'slddrw', 'SLDDRW' => '/assets/file_icon/slddrw.png',
            'sldasm', 'SLDASM' => '/assets/file_icon/sldasm.png',
            'step', 'STEP' => '/assets/file_icon/step.png',
            'docx' => '/assets/file_icon/docx.png',
            'image' => $this->nameFile,
            default => '/assets/file_icon/file.png',
        };
        return (object)[
            'type' => $type,
            'icon' => $icon,
            'link' => $this->nameFile,
            'name' => $this->name,
        ];
    }
}
