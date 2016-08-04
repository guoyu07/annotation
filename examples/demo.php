<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 16/4/26
 * Time: 下午4:57
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

use FastD\Annotation\Annotation;
use FastD\Annotation\AnnotationParser;

include __DIR__ . '/../vendor/autoload.php';

/**
 * Class Test
 *
 * @route("/")
 */
class Test
{
    /**
     * @route("a")
     */
   public function a()
   {}
}

function route($path)
{
    echo $path;
}

$annotator = new AnnotationParser(Test::class);

$annotation = $annotator->getAnnotation('a');

$annotation->callFunc('route');

