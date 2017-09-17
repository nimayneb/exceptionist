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

Kind of exceptions:
- Empty
    - something is set, but have empty content
- Invalid
    - something is set, but has invalid characters or is in an invalid format
- Unknown
    - something is set, but it is unknown (not invalid)
- Missing
    - something is set, but its needs is missing
- Timeout
    - something is set, but it cannot be read in a particular time window

Kind of reasons:
- Absence
    - something is not reachable in a particular time window
- Compatibility
    - something is broken by compatibility
- Deficiency
    - something is needed, but is absent
- Invalidity
    - something is needed, but is invalid

Kind of scopes:
- Access
    - something with accessibilities
- Action
    - something with actions
- Argument
    - something with arguments of a method
    - something with arguments of an object
- Class
    - something with class instancing
- Configuration
    - something with configuration
- Declaration
    - something with declarations
- Definition
    - something with definitions
- Dependency
    - something with dependencies
- Interface
    - something with interfaces
- Method
    - something with methods of an object
- Object
    - something with objects
- Property
    - something with properties of an object
- Reference
    - something with references
- Requirement
    - something with requirements
- Return
    - something with returns of an object
    - something with returns of an method
- Trait
    - something with traits
- Type
    - something with types of a return
    - something with types of a method
    - something with types of an object
- Value
    - something with value

Compose exceptions for your application:
----------------------------------------

Create an interface or a trait for your application - so you are able to catch only the exceptions of your application.
```
interface YourApplication {
}
```

Create your exception:
```
use JBR\Exceptionist\InvalidParser;

class InvalidParserType extends InvalidParser implements YourApplication {

}
```
