@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="bg-[#325B87]  h-[780px] bottom-0 mb-0 ">
            <div class="bg-[#EFF1F0] h-full w-[70%] left-0 p-12 bottom-0 ">
              <div class="h-full w-full m-auto items-center bg-white p-10 rounded-xl shadow-xl">
                <div class="h-[45%] w-[45%] m-auto">
                  <img src='https://lh4.googleusercontent.com/proxy/4Ji1fjGT2LPtIqp1eMt74VwGC2dJ_CT9gSBwcJe8WEbcK4cMJwYwUhJh4y16o8aBMZKJ5ga3ccIRuD8ABNsFVf-90qt2x6_UYm3BRjI5bPMu_V4MRpKOulaDMTwRug' alt="ut_logo" />
                </div>
                <div class="items-center m-auto text-center">
                  <h1 class="montserrat-alternates-semibold text-3xl font-bold m-0 pt-5">
                    Sistema de Gestión de Estadías
                  </h1>
                  <h2 class="inter-variacion text-2xl ">
                    Identíficate con tu correo y contraseña
                  </h2>
                  <div class="mx-32 my-10">
                    <div class='w-full '>
                        <label class="text-[#0D476D] inter-variacion text-xl left-0 " htmlFor="nombre">
                              Correo
                            </label>
                            <input
                              id='Correo'
                              type= 'email'
                              onChange={change}
                              class="mt-2 h-4 block w-full border-2 mb-6 rounded-lg border-[#185866] p-3 bg-white"
                              placeholder='Ingresa tu correo'
                              name='Ingresa tu correo'
                            />
                        </div>
                        <div class='w-full '>
                            <label class="text-[#0D476D] inter-variacion text-xl left-0 " htmlFor="nombre">
                                  Contraseña
                                </label>
                                <input
                                  id='Contraseña'
                                  type= 'password'
                                  onChange={change}
                                  class="mt-2 h-4 block w-full border-2 mb-6 rounded-lg border-[#185866] p-3 bg-white"
                                  placeholder='Ingresa tu contraseña'
                                  name='Ingresa tu contraseña'
                                />
                            </div>
                    <button class="items-center bg-[#5FC8BE] rounded-xl  font-bold h-6 w-[50%] px-4 text-[#18496A]">
                      INGRESAR
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
    </main>
    
</body>
</html>