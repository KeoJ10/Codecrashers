<link href="css/stylesheet.css" rel="stylesheet">
<?php 

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
}

class showData{
    public $showdata = '';

    public function showUser(User $user){
        $bgColor = $user->getActivity() ? 'green' : 'red';
        echo '<table style="background-color:' . $bgColor . ';">
        <tr><td>Name:</td><td>' . $user->getName() . '</td></tr>
        <tr><td>Password: </td><td>' . $user->getPassword() . '</td></tr>
        <tr><td>Email:</td><td> ' . $user->getEmail() . '</td></tr>
        <tr><td>Age:</td><td> ' . $user->getAge() . '</td></tr></table>';
    }
}

$user = new User('Keo', 'Keo123', 'keo@rcn-heliomare.nl', 21, true);
$showData = new showData();
$showData->showUser($user);

$user2 = new User('Melvin', 'Melvin123', 'Melvin@rcn-heliomare.nl', 21, false);
$showData->showUser($user2);

if(isset($_POST['submit'])){
    $active = isset($_POST['active']) ? true : false;
    $user3 = new User($_POST['name'], $_POST['password'], $_POST['email'], $_POST['age'], $active);
    $showData->showUser($user3);
}


?>
<form method="post">
    <input type="text" name="name" id="name" placeholder="Name">
    <input type="text" name="password" id="password" placeholder="Password">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="text" name="age" id="age" placeholder="Age">
    <input type="checkbox" name="active" id="active" placeholder="Active">
    <button type="submit" name="submit">Submit</button>
</form>