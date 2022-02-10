<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <a href="/">
<img src="data:image/png;base64,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" class="w-full h-full" alt="">

</a>
                </div>
            </div>
        </div>
    </body>
</html>
