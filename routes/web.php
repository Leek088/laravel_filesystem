<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

route::controller(FileController::class)->group(function (): void {
    Route::get('/', 'index')->name('index');
    Route::get('/storage_local_create', 'storageLocalCreate')->name('storage.local.create');
    Route::get('/storage_local_append', 'storageLocalAppend')->name('storage.local.append');
    Route::get('/storage_local_read', 'storageLocalRead')->name('storage.local.read');
    Route::get('/storage_local_read_multi', 'storageLocalReadMulti')->name('storage.local.read.multi');
    Route::get('/storage_local_check_file', 'storageLocalCheckFile')->name('storage.local.check.file');
    Route::get('/storage_local_create_json', 'storageLocalCreateJson')->name('storage.local.create.json');
    Route::get('/storage_local_read_json', 'storageLocalReadJson')->name('storage.local.read.json');
    Route::get('/storage_local_list_files', 'storageLocalListFiles')->name('storage.local.list.files');
    Route::get('/storage_local_delete_files', 'storageLocalDeleteFiles')->name('storage.local.delete.files');
    Route::get('/storage_local_create_folder', 'storageLocalCreateFolder')->name('storage.local.create.folder');
    Route::get('/storage_local_delete_folder', 'storageLocalDeleteFolder')->name('storage.local.delete.folder');
    Route::get('/storage_local_metadata_files', 'storageLocalMetadataFiles')->name('storage.local.metadata.files');
    Route::get('/storage_local_list_files_download', 'storageLocalListFilesDownload')->name('storage.local.list.files.download');
});
