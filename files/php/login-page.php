


    <!-- main section start -->
    <main>

        <!-- login section start -->
        <div class="bg-[#FCE0DF]">
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-6 ">
                <h1 class="text-2xl lg:text-4xl font-semibold">Login with LLBD</h1>
                <p class="text-sm lg:text-base mt-2">Login with us to avail all the features.</p>
            </div>
        </div>
        <!-- login section end -->

        <!-- login form -->
        <section class="mb-8">
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto lg:flex items-center md:py-16">
                <div class="lg:w-1/2 mx-auto mt-10 lg:mt-0 flex justify-center">

                    <!-- Login Form Container -->
                    <div class="bg-gray-200 lg:p-8 p-4 rounded-lg md:border w-full max-w-md">
                        <!-- Login Heading -->
                        <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>
                        <?php 
                            if (isset($_GET['submit'])){
                                $submit = $_GET['submit'];
                                if ($submit=='failed'){
                                    echo <<<EOT
                                        <p class="text-red-500 mb-2" style="text-align: center; border: 1px solid red; padding: 5px;background-color: rgb(252, 222, 222,0.3);">Wrong email or password. Try again!</p>
                                    EOT;
                                }
                                if ($submit=='must'){
                                    echo <<<EOT
                                        <p class="text-orange-500 mb-2" style="text-align: center; border: 1px solid orange; padding: 5px;background-color: rgb(252, 222, 222,0.3);">You must login first!</p>
                                    EOT;
                                }
                            }
                        ?>
                        <!-- Login Form -->
                        <form action="files/php/login.php" method="post">
                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                                <input type="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter your email" name="email" required>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <label class="block text-gray-700 font-semibold mb-2">Password</label>
                                <input type="password"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter your password" name="pass" required>
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="flex items-center mb-4">
                                <input type="checkbox" class="mr-2">
                                <label class="text-gray-700">Remember me</label>
                            </div>

                            <!-- Login Button -->
                            <button type="submit"
                                class="w-full bg-[#EB2C29] text-white py-2 rounded-md hover:bg-black transition duration-300">Login</button>
                        </form>

                        <!-- Lost Password and Sign Up Links -->
                        <div class="mt-4 flex justify-between">
                            <a href="#" class="text-sm text-[#EB2C29] hover:underline">Lost your password?</a>
                            <a href="?page=register"
                                class="text-sm text-[#EB2C29] hover:underline">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- main section end -->