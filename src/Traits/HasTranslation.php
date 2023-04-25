<?php

namespace JobMetric\Translation\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use JobMetric\Translation\Models\Translation;

/**
 * @method morphOne(string $class, string $string)
 * @method morphMany(string $class, string $string)
 */
trait HasTranslation
{
    /**
     * translation has one relationship
     *
     * @return MorphOne
     */
    public function translation(): MorphOne
    {
        return $this->morphOne(Translation::class, 'translatable')->where('locale', app()->getLocale());
    }

    /**
     * translation has many relationship
     *
     * @return MorphMany
     */
    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translatable');
    }
}
