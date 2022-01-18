<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!--JQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body data-new-gr-c-s-check-loaded="14.1041.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                Admin Login
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Session Status -->

                <!-- Validation Errors -->

                <form method="POST" action="<?php echo e(route('admin.login')); ?>">
                    <?php echo csrf_field(); ?>
                    <!-- Email Address -->
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>

                        <input
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                            id="email" type="email" name="email" required="required" autofocus="autofocus">
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Password
                        </label>

                        <input
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                            id="password" type="password" name="password" required="required"
                            autocomplete="current-password">
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="http://127.0.0.1:8000/forgot-password">
                            Forgot your password?
                        </a>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                            Log in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/admin/admin-login.blade.php ENDPATH**/ ?>