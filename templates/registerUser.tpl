{include 'header.tpl'}

<div class="container">
    <h1>Registarse</h1>
    <div class="div-login w-25 mx-auto">
        <form method="POST" action="register">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" width="16" height="16">
                        <path fill-rule="evenodd"
                            d="M10.5 5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm.061 3.073a4 4 0 10-5.123 0 6.004 6.004 0 00-3.431 5.142.75.75 0 001.498.07 4.5 4.5 0 018.99 0 .75.75 0 101.498-.07 6.005 6.005 0 00-3.432-5.142z">
                        </path>
                    </svg></span>
                <input type="email" required class="form-control" id="email" name="userEmail" aria-describedby="emailHelp"
                    placeholder="Ingrese su Email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" width="16" height="16">
                        <path fill-rule="evenodd"
                            d="M6.5 5.5a4 4 0 112.731 3.795.75.75 0 00-.768.18L7.44 10.5H6.25a.75.75 0 00-.75.75v1.19l-.06.06H4.25a.75.75 0 00-.75.75v1.19l-.06.06H1.75a.25.25 0 01-.25-.25v-1.69l5.024-5.023a.75.75 0 00.181-.768A3.995 3.995 0 016.5 5.5zm4-5.5a5.5 5.5 0 00-5.348 6.788L.22 11.72a.75.75 0 00-.22.53v2C0 15.216.784 16 1.75 16h2a.75.75 0 00.53-.22l.5-.5a.75.75 0 00.22-.53V14h.75a.75.75 0 00.53-.22l.5-.5a.75.75 0 00.22-.53V12h.75a.75.75 0 00.53-.22l.932-.932A5.5 5.5 0 1010.5 0zm.5 6a1 1 0 100-2 1 1 0 000 2z">
                        </path>
                    </svg></span>
                <input type="password" required class="form-control" id="password" name="userPassword"
                    placeholder="  Ingrese su Password">
            </div>

            {if $error}
                <div class="alert alert-danger mt-3">
                    {$error}
                </div>
            {/if}

            <button type="submit" class="btn btn-primary mt-3">Registrarse</button>
        </form>
    </div>

</div>

{include file='footer.tpl'}