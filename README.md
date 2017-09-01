    Exceptionist

Throwing meaningful and semantic exceptions with interfaces

Exception class names contain no word "Exception" in it.
This is a redundant information and it is easier to understand and to read. 

Usage:

```php
use JBR\Exceptionist\InvalidArgument;
use JBR\Exceptionist\InvalidityReason:

function throwsAnException() {
    throw new InvalidArgument('An Argument is invalid');
}

try {
    throwsAnException();
} catch (InvalidityReason $e) {
    echo $e->getMessage();
}

```

```php
use JBR\Exceptionist\EmptyArgument;
use JBR\Exceptionist\InvalidityReason:
use JBR\Exceptionist\DeficiencyReason;

function throwsAlsoAnException() {
    throw new EmptyArgument('An Argument is empty');
}

try {
    throwsAlsoAnException();
} catch (InvalidityReason|DeficiencyReason $e) {
    echo $e->getMessage();
}
```

