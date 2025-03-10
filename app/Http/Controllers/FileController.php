<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function storageLocalCreate(): void
    {
        Storage::disk('local')->put('file1.txt', Str::random(100));
        echo 'Arquivo local criado!';
    }

    public function storageLocalAppend(): void
    {
        Storage::disk('local')->append('file1.txt', Str::random(100));
        echo 'Foi adicionado contéudo...';
    }

    public function storageLocalRead(): void
    {
        $content = Storage::disk('local')->get('file1.txt');
        echo $content;
    }

    public function storageLocalReadMulti(): void
    {
        $contents = Storage::disk('local')->get('file1.txt');
        $contents = explode(PHP_EOL, $contents);
        foreach ($contents as $line) {
            echo "<p>$line</p>";
        }
    }

    public function storageLocalCheckFile(): void
    {
        if (Storage::disk('local')->exists('file1.txt')) {
            echo 'File1.txt existe!';
        } else {
            echo 'File1.txt não existe!';
        }
    }

    public function storageLocalCreateJson(): void
    {
        $data = [
            ['name' => 'João', 'idade' => 35],
            ['name' => 'Carlos', 'idade' => 22],
            ['name' => 'Miguel', 'idade' => 45],
            ['name' => 'Fábio', 'idade' => 13],
        ];

        Storage::disk('local')->put('data.json', json_encode([$data]));

        echo 'Arquivo json criado!';
    }

    public function storageLocalReadJson(): void
    {
        $data = Storage::disk('local')->json('data.json');
        echo '<pre>';
        print_r($data);
    }

    public function storageLocalListFiles(): void
    {
        $files = Storage::disk('local')->files();
        echo '<pre>';
        print_r($files);
    }

    public function storageLocalDeleteFiles(): void
    {
        $files = Storage::disk('local')->files();
        Storage::disk('local')->delete($files);
        echo 'Todos os arquivos deletados';
    }

    public function storageLocalCreateFolder(): void
    {
        Storage::disk('local')->makeDirectory('documents');
        echo 'Diretorio documents criado!';
    }

    public function storageLocalDeleteFolder(): void
    {
        Storage::disk('local')->deleteDirectory('documents');
        echo 'Diretorio documents excluído!';
    }

    public function storageLocalMetadataFiles(): View
    {
        $list_files = Storage::disk('local')->files();

        $files = [];

        foreach ($list_files as $file) {
            $files[] = [
                'name' => $file,
                'size' => round(Storage::size($file) / 1024, 2) . ' Kb',
                'last_modified' => Carbon::createFromTimestamp(Storage::lastModified($file))->format('d-m-Y H:i:s'),
                'mime_type' => Storage::mimeType($file)

            ];

        }

        return view('list-files-with-metadata', compact('files'));
    }

    public function storageLocalListFilesDownload(): View
    {
        $list_files = Storage::disk('public')->files();

        $files = [];

        foreach ($list_files as $file) {
            $files[] = [
                'name' => $file,
                'size' => round(Storage::disk('public')->size($file) / 1024, 2) . ' Kb',
                'url_download' => Storage::url($file),
            ];
        }
        return view('list-files-with-download', compact('files'));
    }

}
