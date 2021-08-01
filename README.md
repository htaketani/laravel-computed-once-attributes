# laravel-computed-once-attributes

Simple caching attributes of computed by accessor method

## Installation

Download `HasComputedOnceAttributes.php`, and move file into your project dir (e.g. `app/Traits/`).

## Usage

```php
use App\Traits\HasComputedOnceAttributes;

class MyModel extends Model
{
    use HasComputedOnceAttributes;

    // Declare only-once-computed attribute keys
    protected $computed_once_attributes = ['foo'];

    public function getFooAttribute()
    {
        return (... SOME HEAVY PROCCESS ...);
    }
}
```

## Thanks

yuuAn, thanks for your advices.
