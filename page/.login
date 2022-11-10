<?php
session_start();
// if (isset($_SESSION['username'])) {
//   header("Location: home.php");
//   die();
// }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Login</title>

        <?php require './layout/header.php'; ?>
    </head>

    <body>
        <section class="h-screen">
            <div class="px-6 h-full text-gray-800">
                <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                    <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0 mx-auto">
                        <img
                            src="<?php $_SERVER[
                              'DOCUMENT_ROOT'
                            ]; ?>/kas_rev/assets/img/loginimg.jpg"
                            class="w-full"
                            alt="Sample image"
                        />
                    </div>
                    <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0 mx-auto">
                        <form action="ceklogin.php" method="post">
                            <div
                                class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                            >
                                <p class="text-center font-semibold mx-auto mb-4 text-3xl">Log In</p>
                            </div>
                            <div class="mb-4">
                                <input
                                type="text"
                                class="form-control block w-full px-6 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="username"
                                placeholder="Username"
                                name="username"
                                />
                            </div>
                            <div class="mb-4">
                                <input
                                type="password"
                                class="form-control block w-full px-6 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="password"
                                name="password"
                                placeholder="Password"
                                />
                            </div>

                            <div class="flex justify-between items-center mb-4">
                                <div class="form-group form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    id="exampleCheck2"
                                />
                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                                    >Remember me</label
                                >
                                </div>
                                <a href="#!" class="text-gray-800">Forgot password?</a>
                            </div>

                            <div class="text-center lg:text-left">
                                <button type="submit" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php require './layout/footer.php'; ?>
    </body>
</html>