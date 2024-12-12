<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('mydesign/mystyle.css') }}">

    </head>
    
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                    <main class="mt-6">
                        <div>
                            <h1>My Project</h1>
                        
                            <!-- Table structure -->
                            <table border="1" cellpadding="8" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>kjnasfknafsnkasf</td>
                                        <td>jdasfjakmnfasklkasofjaskj</td>
                                    </tr>
                                    <tr>
                                        <td>kjnasfknafsnkasf</td>
                                        <td>jdasfjakmnfasklkasofjaskj</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
