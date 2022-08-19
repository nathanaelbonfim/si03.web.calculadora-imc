<?php

$peso = $_POST['peso'] ?? null;
$altura = $_POST['altura'] ?? null;
$img = null;

if ($peso && $altura)
    $imc = $peso / ($altura * $altura);


?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Calculadora de IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Nathanael Bonfim">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-blue-500">
        <div class="p-5 bg-white rounded m-8">
            <h1 class="font-regular text-xl font-semibold uppercase tracking-wide py-1 border-l-4 border-indigo-500 pl-5 pr-8 mb-8 bg-gray-200 max-w-max rounded">Calculadora de IMC</h1>
            <form method="POST" action="index.php">
                <div>
                    <label for="altura" class="form-label inline-block mb-2 text-gray-700">Altura</label>
                    <input
                        type="number"
                        step=".01"
                        class="
                               form-control
                               block
                               w-full
                               px-3
                               py-1.5
                               text-base
                               font-normal
                               text-gray-700
                               bg-white bg-clip-padding
                               border border-solid border-gray-300
                               rounded
                               transition
                               ease-in-out
                               m-0
                               focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                               "
                        id="altura"
                        placeholder="Altura em decimal"
                        value="<?php echo $altura; ?>"
                        name="altura"
                    />
                </div>
                <div class="mt-5">
                    <label for="peso" class="form-label inline-block mb-2 text-gray-700">Peso</label>
                    <input
                        type="number"
                        step=".01"
                        class="
                               form-control
                               block
                               w-full
                               px-3
                               py-1.5
                               text-base
                               font-normal
                               text-gray-700
                               bg-white bg-clip-padding
                               border border-solid border-gray-300
                               rounded
                               transition
                               ease-in-out
                               m-0
                               focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                               "
                        id="peso"
                        placeholder="Peso em decimal"
                        value="<?php echo $peso; ?>"
                        name="peso"
                    />
                </div>
                <button
                    type="submit"
                    class="mt-5 inline-block px-6 py-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >Calcular IMC</button>

            </form>
            <?php if ($imc): ?>
                <div class="my-5 bg-green-200 p-5 rounded border-l-4 border-green-500 ">
                    <h3>Seu IMC é <?php echo $imc; ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>
