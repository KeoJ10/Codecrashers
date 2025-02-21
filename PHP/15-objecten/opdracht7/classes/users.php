<?php 
namespace classes\users;
class User {
	private string $name;
	private string $password;
	private string $email;
	private int $age;
	private bool $active = true;

    public function getName(): string {
		return $this->name;
	}
    public function getPassword(): string {
		return $this->password;
	}
    public function getEmail(): string {
		return $this->email;
	}
    public function getAge(): int {
		return $this->age;
	}
    public function getActivity(): bool {
		return $this->active;
	}

    public function __construct(?string $name = null, ?string $password = null, ?string $email = null, ?int $age = null , bool $active = true){
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
        $this->active = $active;
    }

	public function showUser() : string{
        $bgColor = $this->getActivity() ? 'green' : 'red';
        return '<table style="background-color:' . $bgColor . ';">
        <tr><td>Name:</td><td>' . $this->getName() . '</td></tr>
        <tr><td>Password: </td><td>' . $this->getPassword() . '</td></tr>
        <tr><td>Email:</td><td> ' . $this->getEmail() . '</td></tr>
        <tr><td>Age:</td><td> ' . $this->getAge() . '</td></tr></table>';
    }
}
?>