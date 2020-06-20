<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">--}}

    {{--    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link id="icon" rel="icon" href="/icons/tooth (2).svg">
    <title>Toothie</title>
    <style>
        body {
            font-family: 'Comfortaa', cursive;
        }

        /*.h30 {*/
        /*height: 30rem;*/
        /*}*/

        .dropdown:hover .dropdown-menu {
            display: block;
        }

    </style>
</head>

<body class="bg-gray-900">
<div class="flex md:flex-row-reverse flex-wrap">
    <!--Main Content-->
    <div class="flex justify-center w-full md:w-10/12 mb-16 sm:mb-0">
        <div class="flex mt-3 w-full justify-center">
            <div class="bg-gray-100 rounded-md shadow-md md:p-4 p-2 w-11/12 overflow-y-auto">
                @yield('content')
            </div>
        </div>
    </div>

    <!--Sidebar-->
    <div class="flex w-full sm:m-2 m-0 md:m-3 md:w-2/12 fixed bottom-0 md:top-0 md:left-0">

        <div class="md:relative mx-auto w-full h-auto md:h-full">

            <div class="md:flex flex justify-evenly w-full hidden md:visible bg-purple-700 rounded-lg mb-3 md:p-3">
                <div class="w-4/12">
                    <img class="rounded-lg w-full shadow-md fill-current shadow-lg border border-purple-500"
                         src="https://api.adorable.io/avatars/285/mwan">
                </div>
                <h1 class="w-6/12 text-center self-center text-white capitalize text-2xl">
                    jwan
                </h1>
            </div>

            <div class="flex rounded-lg bg-purple-700 p-2 h-auto md:h-full">
                <ul class="list-reset w-full ml-4 m-1 h-auto mt-2 flex flex-row md:flex-col w-full overflow-y-scroll md:overflow-hidden">
                    <li class="flex w-full ml-3 my-0 md:my-3 mr-3 md:mr-0 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">

                        <div class="flex self-start justify-center w-full text-center text-white text-md">
                            <a class="flex w-full justify-start tracking-widest font-semibold"
                               href="/dashboard/requests">
                                <svg class="text-center mr-4 h-6 w-6 fill-current text-white font-semibold"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 321.012 321.012">
                                    <path d="M244.961,321.012h-67.896c-4.418,0-8-3.582-8-8v-81.476c0-4.418,3.582-8,8-8h6.075c4.418,0,8,3.582,8,8
	c0,3.755-2.586,6.905-6.075,7.767v65.709h52.483c1.19-2.924,4.061-4.985,7.413-4.985c4.418,0,8,3.582,8,8v4.985
	C252.961,317.43,249.379,321.012,244.961,321.012z M277.342,290.407h-67.896c-4.418,0-8-3.582-8-8v-81.476c0-4.418,3.582-8,8-8
	h67.896c4.418,0,8,3.582,8,8v81.476C285.342,286.825,281.76,290.407,277.342,290.407z M217.446,274.407h51.896v-65.476h-51.896
	V274.407z M43.669,275.849c-1.001,0-2.02-0.189-3.005-0.589c-4.094-1.661-6.066-6.327-4.405-10.421l27.575-67.958
	c8.519-20.99,17.511-35.853,28.299-46.774c14.288-14.465,31.952-21.799,52.501-21.799h36.576c28.069,0,49.864,13.081,66.632,39.992
	c2.337,3.75,1.191,8.684-2.559,11.021c-3.751,2.338-8.685,1.19-11.021-2.56c-9.401-15.087-20.223-24.681-33.251-29.264
	l-31.628,43.341c-1.506,2.063-3.907,3.284-6.462,3.284c-2.555,0-4.956-1.221-6.462-3.284l-31.65-43.371
	c-19.116,6.692-33.513,24.294-46.15,55.431l-27.575,67.957C49.824,273.964,46.83,275.849,43.669,275.849z M142.338,144.344
	l20.585,28.207l20.584-28.206c-0.76-0.025-1.523-0.037-2.296-0.037h-36.575C143.864,144.308,143.098,144.319,142.338,144.344z
	 M246.585,263.42h-6.382c-4.418,0-8-3.582-8-8s3.582-8,8-8h6.382c4.418,0,8,3.582,8,8S251.003,263.42,246.585,263.42z
	 M249.777,235.918H237.01c-4.418,0-8-3.582-8-8s3.582-8,8-8h12.767c4.418,0,8,3.582,8,8S254.195,235.918,249.777,235.918z
	 M163.516,106.005c-29.225,0-53.001-23.776-53.001-53.002c0-24.076,16.133-44.454,38.158-50.888
	c0.104-0.034,0.209-0.066,0.316-0.097c3.556-1.012,7.213-1.646,10.915-1.896c0.016-0.006,0.035-0.003,0.053-0.004
	c0.018-0.001,0.038-0.001,0.055-0.004c0.017-0.002,0.033-0.003,0.05-0.003c0.627-0.04,1.26-0.07,1.893-0.089
	c0.028,0.003,0.078-0.002,0.116-0.003c0,0,0,0,0,0c0.021-0.001,0.039-0.003,0.063-0.002c0.018,0,0.036-0.001,0.054-0.001
	c0.023-0.001,0.045-0.002,0.067-0.002c0.018,0,0.038-0.001,0.056-0.001c0.024,0,0.048-0.001,0.073-0.002
	c0.017-0.001,0.035-0.002,0.053-0.001c0.017-0.001,0.032-0.001,0.049-0.001c0.029,0,0.058-0.001,0.087-0.002h0.002
	c0.016-0.001,0.027-0.002,0.045,0c0.055-0.001,0.111-0.002,0.167-0.003h0.002c0.057-0.001,0.113-0.001,0.169-0.002h0
	c0.042,0,0.084-0.001,0.126-0.001h0.002c0.015,0,0.025-0.003,0.045-0.001c0.044,0,0.089,0.001,0.13,0c0.017,0,0.034,0,0.05-0.001
	c0.023,0,0.052,0.002,0.075,0c0.018,0.001,0.036,0.001,0.054,0c0.02,0,0.044,0,0.067,0c0.003,0,0.005,0,0.005,0
	c0.015,0,0.026,0,0.039,0c0.015,0.001,0.03,0.001,0.041,0c0.016,0,0.026,0,0.042,0c0.014,0,0.028,0,0.042,0c0.014,0,0.03,0,0.044,0
	c0.016,0,0.032,0.001,0.047,0.001h0C190.856,0.13,213.28,20.339,216.202,47.2c0.208,1.906,0.315,3.843,0.315,5.803
	C216.517,82.229,192.741,106.005,163.516,106.005z M145.269,20.82c-11.19,6.371-18.754,18.41-18.754,32.183
	c0,20.403,16.599,37.002,37.001,37.002c18.684,0,34.178-13.922,36.656-31.937c-1.399,0.11-2.805,0.166-4.215,0.166
	C172.167,58.234,151.929,42.737,145.269,20.82z M160.568,16.116c4.645,15.3,18.776,26.118,35.39,26.118
	c0.979,0,1.956-0.038,2.927-0.114c-4.633-15.03-18.603-26.005-35.106-26.119c-0.014,0-0.032,0.001-0.047,0
	c-0.019,0-0.031-0.002-0.053-0.001c-0.019,0-0.033-0.001-0.054,0c-0.019,0-0.035-0.001-0.055,0c-0.02,0-0.007,0.003-0.059,0
	c-0.016,0-0.03,0.001-0.047,0c-0.005,0-0.01,0-0.015,0C162.479,16.002,161.519,16.041,160.568,16.116z"/>
                                </svg>
                                Visuals
                            </a>
                        </div>

                    </li>

                    <li class="flex w-full ml-3 my-0 md:my-3 mr-3 md:mr-0 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">

                        <div class="flex self-start justify-center w-full text-center text-white text-md ">
                            <a class="flex w-full justify-start tracking-widest font-semibold"
                               href="/dashboard/requests">
                                <svg class="text-center mr-4 h-6 w-6 fill-current text-white font-semibold"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 321.012 321.012">
                                    <path d="M244.961,321.012h-67.896c-4.418,0-8-3.582-8-8v-81.476c0-4.418,3.582-8,8-8h6.075c4.418,0,8,3.582,8,8
	c0,3.755-2.586,6.905-6.075,7.767v65.709h52.483c1.19-2.924,4.061-4.985,7.413-4.985c4.418,0,8,3.582,8,8v4.985
	C252.961,317.43,249.379,321.012,244.961,321.012z M277.342,290.407h-67.896c-4.418,0-8-3.582-8-8v-81.476c0-4.418,3.582-8,8-8
	h67.896c4.418,0,8,3.582,8,8v81.476C285.342,286.825,281.76,290.407,277.342,290.407z M217.446,274.407h51.896v-65.476h-51.896
	V274.407z M43.669,275.849c-1.001,0-2.02-0.189-3.005-0.589c-4.094-1.661-6.066-6.327-4.405-10.421l27.575-67.958
	c8.519-20.99,17.511-35.853,28.299-46.774c14.288-14.465,31.952-21.799,52.501-21.799h36.576c28.069,0,49.864,13.081,66.632,39.992
	c2.337,3.75,1.191,8.684-2.559,11.021c-3.751,2.338-8.685,1.19-11.021-2.56c-9.401-15.087-20.223-24.681-33.251-29.264
	l-31.628,43.341c-1.506,2.063-3.907,3.284-6.462,3.284c-2.555,0-4.956-1.221-6.462-3.284l-31.65-43.371
	c-19.116,6.692-33.513,24.294-46.15,55.431l-27.575,67.957C49.824,273.964,46.83,275.849,43.669,275.849z M142.338,144.344
	l20.585,28.207l20.584-28.206c-0.76-0.025-1.523-0.037-2.296-0.037h-36.575C143.864,144.308,143.098,144.319,142.338,144.344z
	 M246.585,263.42h-6.382c-4.418,0-8-3.582-8-8s3.582-8,8-8h6.382c4.418,0,8,3.582,8,8S251.003,263.42,246.585,263.42z
	 M249.777,235.918H237.01c-4.418,0-8-3.582-8-8s3.582-8,8-8h12.767c4.418,0,8,3.582,8,8S254.195,235.918,249.777,235.918z
	 M163.516,106.005c-29.225,0-53.001-23.776-53.001-53.002c0-24.076,16.133-44.454,38.158-50.888
	c0.104-0.034,0.209-0.066,0.316-0.097c3.556-1.012,7.213-1.646,10.915-1.896c0.016-0.006,0.035-0.003,0.053-0.004
	c0.018-0.001,0.038-0.001,0.055-0.004c0.017-0.002,0.033-0.003,0.05-0.003c0.627-0.04,1.26-0.07,1.893-0.089
	c0.028,0.003,0.078-0.002,0.116-0.003c0,0,0,0,0,0c0.021-0.001,0.039-0.003,0.063-0.002c0.018,0,0.036-0.001,0.054-0.001
	c0.023-0.001,0.045-0.002,0.067-0.002c0.018,0,0.038-0.001,0.056-0.001c0.024,0,0.048-0.001,0.073-0.002
	c0.017-0.001,0.035-0.002,0.053-0.001c0.017-0.001,0.032-0.001,0.049-0.001c0.029,0,0.058-0.001,0.087-0.002h0.002
	c0.016-0.001,0.027-0.002,0.045,0c0.055-0.001,0.111-0.002,0.167-0.003h0.002c0.057-0.001,0.113-0.001,0.169-0.002h0
	c0.042,0,0.084-0.001,0.126-0.001h0.002c0.015,0,0.025-0.003,0.045-0.001c0.044,0,0.089,0.001,0.13,0c0.017,0,0.034,0,0.05-0.001
	c0.023,0,0.052,0.002,0.075,0c0.018,0.001,0.036,0.001,0.054,0c0.02,0,0.044,0,0.067,0c0.003,0,0.005,0,0.005,0
	c0.015,0,0.026,0,0.039,0c0.015,0.001,0.03,0.001,0.041,0c0.016,0,0.026,0,0.042,0c0.014,0,0.028,0,0.042,0c0.014,0,0.03,0,0.044,0
	c0.016,0,0.032,0.001,0.047,0.001h0C190.856,0.13,213.28,20.339,216.202,47.2c0.208,1.906,0.315,3.843,0.315,5.803
	C216.517,82.229,192.741,106.005,163.516,106.005z M145.269,20.82c-11.19,6.371-18.754,18.41-18.754,32.183
	c0,20.403,16.599,37.002,37.001,37.002c18.684,0,34.178-13.922,36.656-31.937c-1.399,0.11-2.805,0.166-4.215,0.166
	C172.167,58.234,151.929,42.737,145.269,20.82z M160.568,16.116c4.645,15.3,18.776,26.118,35.39,26.118
	c0.979,0,1.956-0.038,2.927-0.114c-4.633-15.03-18.603-26.005-35.106-26.119c-0.014,0-0.032,0.001-0.047,0
	c-0.019,0-0.031-0.002-0.053-0.001c-0.019,0-0.033-0.001-0.054,0c-0.019,0-0.035-0.001-0.055,0c-0.02,0-0.007,0.003-0.059,0
	c-0.016,0-0.03,0.001-0.047,0c-0.005,0-0.01,0-0.015,0C162.479,16.002,161.519,16.041,160.568,16.116z"/>
                                </svg>
                                Requests
                            </a>
                        </div>

                    </li>
                    <li class="flex w-full ml-3 my-0 md:my-3 mr-3 md:mr-0 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">

                        <div class="flex self-start justify-center w-full text-center text-white text-md ">
                            <a class="flex w-full justify-start tracking-widest font-semibold"
                               href="/dashboard/students">
                                <svg class="text-center mr-4 h-6 w-6 fill-current text-white font-semibold"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 321.012 321.012">
                                    <path d="M244.961,321.012h-67.896c-4.418,0-8-3.582-8-8v-81.476c0-4.418,3.582-8,8-8h6.075c4.418,0,8,3.582,8,8
	c0,3.755-2.586,6.905-6.075,7.767v65.709h52.483c1.19-2.924,4.061-4.985,7.413-4.985c4.418,0,8,3.582,8,8v4.985
	C252.961,317.43,249.379,321.012,244.961,321.012z M277.342,290.407h-67.896c-4.418,0-8-3.582-8-8v-81.476c0-4.418,3.582-8,8-8
	h67.896c4.418,0,8,3.582,8,8v81.476C285.342,286.825,281.76,290.407,277.342,290.407z M217.446,274.407h51.896v-65.476h-51.896
	V274.407z M43.669,275.849c-1.001,0-2.02-0.189-3.005-0.589c-4.094-1.661-6.066-6.327-4.405-10.421l27.575-67.958
	c8.519-20.99,17.511-35.853,28.299-46.774c14.288-14.465,31.952-21.799,52.501-21.799h36.576c28.069,0,49.864,13.081,66.632,39.992
	c2.337,3.75,1.191,8.684-2.559,11.021c-3.751,2.338-8.685,1.19-11.021-2.56c-9.401-15.087-20.223-24.681-33.251-29.264
	l-31.628,43.341c-1.506,2.063-3.907,3.284-6.462,3.284c-2.555,0-4.956-1.221-6.462-3.284l-31.65-43.371
	c-19.116,6.692-33.513,24.294-46.15,55.431l-27.575,67.957C49.824,273.964,46.83,275.849,43.669,275.849z M142.338,144.344
	l20.585,28.207l20.584-28.206c-0.76-0.025-1.523-0.037-2.296-0.037h-36.575C143.864,144.308,143.098,144.319,142.338,144.344z
	 M246.585,263.42h-6.382c-4.418,0-8-3.582-8-8s3.582-8,8-8h6.382c4.418,0,8,3.582,8,8S251.003,263.42,246.585,263.42z
	 M249.777,235.918H237.01c-4.418,0-8-3.582-8-8s3.582-8,8-8h12.767c4.418,0,8,3.582,8,8S254.195,235.918,249.777,235.918z
	 M163.516,106.005c-29.225,0-53.001-23.776-53.001-53.002c0-24.076,16.133-44.454,38.158-50.888
	c0.104-0.034,0.209-0.066,0.316-0.097c3.556-1.012,7.213-1.646,10.915-1.896c0.016-0.006,0.035-0.003,0.053-0.004
	c0.018-0.001,0.038-0.001,0.055-0.004c0.017-0.002,0.033-0.003,0.05-0.003c0.627-0.04,1.26-0.07,1.893-0.089
	c0.028,0.003,0.078-0.002,0.116-0.003c0,0,0,0,0,0c0.021-0.001,0.039-0.003,0.063-0.002c0.018,0,0.036-0.001,0.054-0.001
	c0.023-0.001,0.045-0.002,0.067-0.002c0.018,0,0.038-0.001,0.056-0.001c0.024,0,0.048-0.001,0.073-0.002
	c0.017-0.001,0.035-0.002,0.053-0.001c0.017-0.001,0.032-0.001,0.049-0.001c0.029,0,0.058-0.001,0.087-0.002h0.002
	c0.016-0.001,0.027-0.002,0.045,0c0.055-0.001,0.111-0.002,0.167-0.003h0.002c0.057-0.001,0.113-0.001,0.169-0.002h0
	c0.042,0,0.084-0.001,0.126-0.001h0.002c0.015,0,0.025-0.003,0.045-0.001c0.044,0,0.089,0.001,0.13,0c0.017,0,0.034,0,0.05-0.001
	c0.023,0,0.052,0.002,0.075,0c0.018,0.001,0.036,0.001,0.054,0c0.02,0,0.044,0,0.067,0c0.003,0,0.005,0,0.005,0
	c0.015,0,0.026,0,0.039,0c0.015,0.001,0.03,0.001,0.041,0c0.016,0,0.026,0,0.042,0c0.014,0,0.028,0,0.042,0c0.014,0,0.03,0,0.044,0
	c0.016,0,0.032,0.001,0.047,0.001h0C190.856,0.13,213.28,20.339,216.202,47.2c0.208,1.906,0.315,3.843,0.315,5.803
	C216.517,82.229,192.741,106.005,163.516,106.005z M145.269,20.82c-11.19,6.371-18.754,18.41-18.754,32.183
	c0,20.403,16.599,37.002,37.001,37.002c18.684,0,34.178-13.922,36.656-31.937c-1.399,0.11-2.805,0.166-4.215,0.166
	C172.167,58.234,151.929,42.737,145.269,20.82z M160.568,16.116c4.645,15.3,18.776,26.118,35.39,26.118
	c0.979,0,1.956-0.038,2.927-0.114c-4.633-15.03-18.603-26.005-35.106-26.119c-0.014,0-0.032,0.001-0.047,0
	c-0.019,0-0.031-0.002-0.053-0.001c-0.019,0-0.033-0.001-0.054,0c-0.019,0-0.035-0.001-0.055,0c-0.02,0-0.007,0.003-0.059,0
	c-0.016,0-0.03,0.001-0.047,0c-0.005,0-0.01,0-0.015,0C162.479,16.002,161.519,16.041,160.568,16.116z"/>
                                </svg>
                                Students
                            </a>
                        </div>

                    </li>
                    <li class="flex w-full ml-3 my-0 md:my-3 mr-3 md:mr-0 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">

                        <div class="flex self-start justify-center w-full text-center text-white text-md ">
                            <a class="flex w-full justify-start tracking-widest font-semibold"
                               href="/dashboard/patients">
                                <svg class="text-center mr-4 h-6 w-6 fill-current text-white font-semibold"
                                     viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m.5 12c-.062 0-.125-.012-.185-.035-.19-.076-.315-.26-.315-.465 0-1.684.182-3.362.542-4.988.445-2.034 2.291-3.512 4.388-3.512h1.77c2.285 0 4.493-.945 6.057-2.594.355-.319.788-.451 1.214-.391.435.061.821.311 1.061.688 1.025 1.631 2.574 4.093 2.897 8.904.019.276-.19.514-.465.533-.274.017-.514-.189-.533-.465-.306-4.56-1.773-6.894-2.745-8.438-.08-.126-.209-.211-.353-.231-.138-.017-.273.023-.38.118-1.723 1.817-4.195 2.876-6.753 2.876h-1.77c-1.631 0-3.066 1.147-3.412 2.727-.251 1.137-.412 2.3-.48 3.473l1.378-1.462c1.299-1.368 3.432-1.582 4.963-.496.944.679 2.301.677 3.239.002 1.452-1.043 3.689-.843 4.963.49l.473.503c.189.201.179.518-.022.707s-.518.181-.707-.022l-.47-.5c-.935-.978-2.594-1.128-3.654-.367-1.281.921-3.123.921-4.404 0-1.124-.796-2.696-.638-3.655.369l-2.278 2.418c-.096.103-.229.158-.364.158z"/>
                                    <circle
                                        cx="5" cy="13" r="1"/>
                                    <path
                                        d="m9.82 21h-1.64c-2.185 0-4.239-.852-5.784-2.396-1.545-1.546-2.396-3.6-2.396-5.784v-1.32c0-.276.224-.5.5-.5s.5.224.5.5v1.32c0 1.917.747 3.719 2.104 5.077 1.355 1.356 3.159 2.103 5.076 2.103h1.64c.194 0 .388-.009.582-.028.284-.02.52.175.546.449.027.275-.174.52-.449.547-.227.021-.453.032-.679.032z"/>
                                    <path
                                        d="m16.5 18c-.174 0-.343-.091-.435-.253-.137-.24-.053-.546.188-.682l.168-.096c.523-.297.715-.792.478-1.232-.131-.243-.041-.546.203-.678.243-.129.546-.04.677.203.5.926.136 2.009-.864 2.576l-.168.096c-.078.045-.163.066-.247.066z"/>
                                    <path
                                        d="m17.5 21c-.045 0-.09-.006-.135-.019-.266-.074-.421-.351-.347-.616.139-.495.45-.897.877-1.133.454-.252 1.006-.303 1.56-.138l.186.055c.265.078.417.355.338.62-.078.265-.351.418-.621.339l-.186-.055c-.292-.085-.575-.067-.793.054-.193.106-.331.289-.398.527-.062.221-.262.366-.481.366z"/>
                                    <path
                                        d="m19.553 24c-.373 0-.722-.205-1.015-.378-.179-.106-.425-.251-.538-.251s-.359.145-.538.25c-.373.221-.836.495-1.324.327-.492-.166-.704-.655-.892-1.087-.083-.192-.198-.456-.285-.521-.086-.065-.358-.099-.557-.122-.43-.052-.965-.116-1.266-.549-.291-.417-.191-.932-.104-1.386.043-.226.098-.507.06-.63-.033-.105-.225-.289-.38-.437-.318-.304-.714-.683-.714-1.216s.396-.912.715-1.217c.155-.147.347-.331.38-.438.038-.123-.016-.404-.06-.631-.087-.453-.186-.968.104-1.385.3-.432.835-.496 1.265-.548.199-.023.471-.057.556-.121.087-.066.202-.33.286-.523.187-.431.399-.92.892-1.087.485-.164.95.108 1.323.328.179.106.425.25.538.25s.359-.145.539-.25c.373-.22.838-.493 1.323-.328.493.168.705.657.892 1.088.083.192.198.456.285.521.086.065.358.099.557.122.43.052.965.116 1.266.549.291.417.191.932.104 1.386-.043.226-.098.507-.06.63.033.105.225.289.38.437.319.305.715.684.715 1.217s-.396.912-.715 1.217c-.155.147-.347.331-.38.438-.038.123.016.404.06.631.087.453.186.968-.104 1.385-.3.432-.835.496-1.265.548-.199.023-.471.057-.556.121-.087.066-.202.33-.286.523-.187.431-.399.919-.891 1.088-.106.034-.209.049-.31.049zm-3.1-11c-.001 0-.003 0-.004 0-.07.043-.209.364-.285.536-.148.343-.302.696-.597.921-.302.229-.695.276-1.043.318-.177.021-.506.061-.564.127-.046.084.021.436.057.624.068.354.145.754.033 1.116-.11.354-.381.612-.644.864-.152.145-.406.389-.406.494s.254.349.406.493c.263.252.534.511.644.864.112.362.035.762-.033 1.115-.037.189-.104.541-.056.626.057.065.386.104.563.126.348.042.741.089 1.043.319.294.224.448.577.596.919.075.173.214.493.3.541.076 0 .334-.152.489-.244.309-.182.66-.389 1.046-.389s.737.207 1.046.39c.153.09.407.24.5.24.001 0 .003 0 .004-.001.07-.042.209-.363.284-.536.149-.343.303-.696.597-.921.302-.229.695-.276 1.043-.318.177-.021.506-.061.564-.127.046-.084-.021-.436-.057-.624-.068-.354-.145-.754-.033-1.116.11-.354.381-.612.644-.864.156-.144.41-.388.41-.493s-.254-.349-.406-.493c-.263-.252-.534-.511-.644-.864-.112-.362-.035-.762.033-1.115.037-.189.104-.541.056-.626-.057-.065-.386-.104-.563-.126-.348-.042-.741-.089-1.043-.319-.294-.224-.448-.577-.596-.92-.075-.172-.214-.493-.3-.541-.075 0-.334.153-.489.245-.31.182-.66.389-1.046.389s-.737-.207-1.046-.389c-.155-.092-.409-.241-.503-.241z"/>
                                </svg>
                                Patients
                            </a>
                        </div>

                    </li>
                </ul>

            </div>

        </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@stack('script')
</body>
</html>
