--TEST--
Test Zip Archive write
--FILE--
<?php

use compress\ZipArchive;
use compress\ZipArchiveEntry;
use php\io\File;
use php\io\MemoryStream;
use php\io\Stream;
use php\lang\System;
use php\lib\str;

$file = File::createTemp("foobar", ".zip", System::tempDirectory());

$archive = new ZipArchive($file);
$archive->open();
$archive->addEmptyEntry(new ZipArchiveEntry('foobar/'));
$archive->addFile(__DIR__ . "/foobar.zip");

$text = "TestText";
$entry = new ZipArchiveEntry('test.txt');
$entry->size = str::length($text);
$archive->addEntry($entry, new MemoryStream($text));
$archive->close();

$archive->read('test.txt', function ($entry, ?Stream $stream) {
    var_dump($stream->readAll());
});


echo 'foobar/ is dir: ', $archive->read('foobar/')->isDirectory() ? 'true' : 'false', "\n";
echo 'foobar.tar is file: ', !$archive->read('foobar.zip')->isDirectory() ? 'true' : 'false', "\n";

echo "\ntar file is deleted: ", $file->delete() ? "true" : "false";

?>
--EXPECTF--
string(8) "TestText"
foobar/ is dir: true
foobar.tar is file: true

tar file is deleted: true