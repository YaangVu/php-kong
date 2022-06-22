<?php
/**
 * @Author yaangvu
 * @Date   Jun 17, 2022
 */

namespace Yaangvu\LaravelKong;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Yaangvu\LaravelKong\Models\Target;

trait Mapper
{
    private string $classPath       = 'Yaangvu\\LaravelKong\\Models\\';
    private array  $excludedClasses = [Target::class];

    public function map(array $data, string $class)
    {
        if (!class_exists($class))
            return null;

        $object = new $class;
        foreach ($data as $key => $value) {
            $function = "set" . Str::studly($key);
            $subClass = $this->classPath . Str::studly($key);
            if (method_exists($object, $function)) {
                try {
                    if (class_exists($subClass) && !in_array($subClass, $this->excludedClasses))
                        $object->$function($this->map((array)$value, $subClass));
                    else
                        $object->$function($value);
                } catch (Exception $exception) {
                    Log::alert($exception);
                }
            }
        }

        return $object;
    }
}