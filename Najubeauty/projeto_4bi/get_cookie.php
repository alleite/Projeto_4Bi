 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['produtos'])) {
        $selected_produtos = $_POST['produtos'];

        $produtos_data = json_encode($selected_produtos);

        setcookie("selected_produtos", $produtos_data, time() + (3600), "/");

        header('location: login.php');
    } else {
        echo "Nenhum produto selecionado.";
    }
}
?>