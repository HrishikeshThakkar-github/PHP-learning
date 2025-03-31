<?php



class User {
    private string $firstName;
    private string $lastName;

    // First name hook: Get (capitalize automatically)
    public function get firstName(): string {
        return ucfirst($this->firstName);
    }

    // First name hook: Set (store in lowercase)
    public function set firstName(string $value): void {
        $this->firstName = strtolower($value);
    }

    // Last name hook: Get (capitalize automatically)
    public function get lastName(): string {
        return ucfirst($this->lastName);
    }

    // Last name hook: Set (store in lowercase)
    public function set lastName(string $value): void {
        $this->lastName = strtolower($value);
    }

    // Virtual property (computed full name)
    public function get fullName(): string {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->lastName);
    }
}

$user = new User();
$user->firstName = "john"; // Calls set firstName()
$user->lastName = "doe";   // Calls set lastName()

echo $user->firstName; // Output: John
echo $user->lastName;  // Output: Doe
echo $user->fullName;  // Output: John Doe (computed automatically)


/*

Why Is This Better?
✅ No need for extra getter/setter methods
✅ Direct property access ($user->firstName) but with automatic formatting
✅ Computed property (fullName) without storing extra data
✅ Less boilerplate, more readable and maintainable

Summary
Feature	Without Property Hooks	With Property Hooks
Code Complexity	6 methods (set/get)	3 property hooks
Encapsulation	Separate logic in methods	Direct property access
Readability	$user->getFirstName();	$user->firstName;
Computed Properties	Needs a separate method (getFullName())	Handled automatically with get fullName()
