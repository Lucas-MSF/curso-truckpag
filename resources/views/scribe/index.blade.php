<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.16.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.16.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-conta-bancaria" class="tocify-header">
                <li class="tocify-item level-1" data-unique="conta-bancaria">
                    <a href="#conta-bancaria">Conta Bancaria</a>
                </li>
                                    <ul id="tocify-subheader-conta-bancaria" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="conta-bancaria-GETapi-conta-banco">
                                <a href="#conta-bancaria-GETapi-conta-banco">Listar conta bancaria</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-bancaria-POSTapi-conta-banco">
                                <a href="#conta-bancaria-POSTapi-conta-banco">Criar conta bancaria</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-bancaria-GETapi-conta-banco--id-">
                                <a href="#conta-bancaria-GETapi-conta-banco--id-">Retorna conta bancaria</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-bancaria-PUTapi-conta-banco--id-">
                                <a href="#conta-bancaria-PUTapi-conta-banco--id-">Atualizar conta bancaria</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-bancaria-DELETEapi-conta-banco--id-">
                                <a href="#conta-bancaria-DELETEapi-conta-banco--id-">Excluir conta bancaria</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-conta-pagar" class="tocify-header">
                <li class="tocify-item level-1" data-unique="conta-pagar">
                    <a href="#conta-pagar">Conta Pagar</a>
                </li>
                                    <ul id="tocify-subheader-conta-pagar" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="conta-pagar-GETapi-conta-pagar">
                                <a href="#conta-pagar-GETapi-conta-pagar">Listar contas a pagar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-pagar-POSTapi-conta-pagar">
                                <a href="#conta-pagar-POSTapi-conta-pagar">Criar conta a pagar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-pagar-GETapi-conta-pagar--id-">
                                <a href="#conta-pagar-GETapi-conta-pagar--id-">Retorna conta a Pagar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-pagar-PUTapi-conta-pagar--id-">
                                <a href="#conta-pagar-PUTapi-conta-pagar--id-">Atualizar conta a pagar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="conta-pagar-DELETEapi-conta-pagar--id-">
                                <a href="#conta-pagar-DELETEapi-conta-pagar--id-">Excluir conta a pagar</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-fornecedor" class="tocify-header">
                <li class="tocify-item level-1" data-unique="fornecedor">
                    <a href="#fornecedor">Fornecedor</a>
                </li>
                                    <ul id="tocify-subheader-fornecedor" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="fornecedor-GETapi-fornecedor">
                                <a href="#fornecedor-GETapi-fornecedor">Listar Fornecedores</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="fornecedor-POSTapi-fornecedor">
                                <a href="#fornecedor-POSTapi-fornecedor">Criar Fornecedor</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="fornecedor-GETapi-fornecedor--fornecedor_id-">
                                <a href="#fornecedor-GETapi-fornecedor--fornecedor_id-">Retorna Fornecedor</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="fornecedor-PUTapi-fornecedor--fornecedor_id-">
                                <a href="#fornecedor-PUTapi-fornecedor--fornecedor_id-">Atualizar Fornecedor</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="fornecedor-DELETEapi-fornecedor--fornecedor_id-">
                                <a href="#fornecedor-DELETEapi-fornecedor--fornecedor_id-">Excluir Fornecedor</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-usuarios" class="tocify-header">
                <li class="tocify-item level-1" data-unique="usuarios">
                    <a href="#usuarios">Usuarios</a>
                </li>
                                    <ul id="tocify-subheader-usuarios" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="usuarios-GETapi-user">
                                <a href="#usuarios-GETapi-user">Listagem de Usuarios</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 20, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="conta-bancaria">Conta Bancaria</h1>

    

                                <h2 id="conta-bancaria-GETapi-conta-banco">Listar conta bancaria</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>retorna todos os conta bancaria do banco</p>

<span id="example-requests-GETapi-conta-banco">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/conta-banco" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-banco"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-conta-banco">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;conta_bancaria_id&quot;: 1,
            &quot;banco_nome&quot;: &quot;Randal Gorczany&quot;,
            &quot;agencia_numero&quot;: &quot;6545&quot;,
            &quot;conta_numero&quot;: &quot;137405&quot;,
            &quot;saldo_inicial&quot;: &quot;931.59&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T18:00:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T18:00:00.000000Z&quot;
        },
        {
            &quot;conta_bancaria_id&quot;: 2,
            &quot;banco_nome&quot;: &quot;Travis Schneider&quot;,
            &quot;agencia_numero&quot;: &quot;9855&quot;,
            &quot;conta_numero&quot;: &quot;329099&quot;,
            &quot;saldo_inicial&quot;: &quot;555.56&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T18:00:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T18:00:00.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conta-banco" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conta-banco"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conta-banco" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-conta-banco" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conta-banco"></code></pre>
</span>
<form id="form-GETapi-conta-banco" data-method="GET"
      data-path="api/conta-banco"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conta-banco', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conta-banco"
                    onclick="tryItOut('GETapi-conta-banco');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conta-banco"
                    onclick="cancelTryOut('GETapi-conta-banco');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conta-banco" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conta-banco</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-conta-banco"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-conta-banco"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-conta-banco"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="conta-bancaria-POSTapi-conta-banco">Criar conta bancaria</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>cria um conta bancaria conforme os dados inseridos</p>

<span id="example-requests-POSTapi-conta-banco">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/conta-banco" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"banco_nome\": \"Itau\",
    \"agencia_numero\": \"0927\",
    \"conta_numero\": \"509428\",
    \"saldo_inicial\": 25.28
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-banco"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "banco_nome": "Itau",
    "agencia_numero": "0927",
    "conta_numero": "509428",
    "saldo_inicial": 25.28
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-conta-banco">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;conta_bancaria_id&quot;: 1,
        &quot;banco_nome&quot;: &quot;eius&quot;,
        &quot;agencia_numero&quot;: &quot;9629&quot;,
        &quot;conta_numero&quot;: &quot;849426&quot;,
        &quot;saldo_inicial&quot;: 984.91,
        &quot;created_at&quot;: &quot;2023-02-20T18:38:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-20T18:38:16.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-conta-banco" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-conta-banco"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-conta-banco" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-conta-banco" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-conta-banco"></code></pre>
</span>
<form id="form-POSTapi-conta-banco" data-method="POST"
      data-path="api/conta-banco"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-conta-banco', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-conta-banco"
                    onclick="tryItOut('POSTapi-conta-banco');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-conta-banco"
                    onclick="cancelTryOut('POSTapi-conta-banco');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-conta-banco" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/conta-banco</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-conta-banco"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-conta-banco"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-conta-banco"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>banco_nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="banco_nome"                data-endpoint="POSTapi-conta-banco"
               value="Itau"
               data-component="body">
    <br>
<p>nome do banco. O campo value não pode ser superior a 255 caracteres. Example: <code>Itau</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agencia_numero</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="agencia_numero"                data-endpoint="POSTapi-conta-banco"
               value="0927"
               data-component="body">
    <br>
<p>numero da agencia. O campo value não pode ser superior a 10 caracteres. Example: <code>0927</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conta_numero</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="conta_numero"                data-endpoint="POSTapi-conta-banco"
               value="509428"
               data-component="body">
    <br>
<p>numero da conta. O campo value não pode ser superior a 10 caracteres. Example: <code>509428</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>saldo_inicial</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="saldo_inicial"                data-endpoint="POSTapi-conta-banco"
               value="25.28"
               data-component="body">
    <br>
<p>saldo inicial da conta. Example: <code>25.28</code></p>
        </div>
        </form>

                    <h2 id="conta-bancaria-GETapi-conta-banco--id-">Retorna conta bancaria</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>retorna um conta bancaria com base no id passado</p>

<span id="example-requests-GETapi-conta-banco--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/conta-banco/eligendi" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-banco/eligendi"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-conta-banco--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;conta_bancaria_id&quot;: 1,
        &quot;banco_nome&quot;: &quot;eius&quot;,
        &quot;agencia_numero&quot;: &quot;9629&quot;,
        &quot;conta_numero&quot;: &quot;849426&quot;,
        &quot;saldo_inicial&quot;: 984.91,
        &quot;created_at&quot;: &quot;2023-02-20T18:38:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-20T18:38:16.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conta-banco--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conta-banco--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conta-banco--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-conta-banco--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conta-banco--id-"></code></pre>
</span>
<form id="form-GETapi-conta-banco--id-" data-method="GET"
      data-path="api/conta-banco/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conta-banco--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conta-banco--id-"
                    onclick="tryItOut('GETapi-conta-banco--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conta-banco--id-"
                    onclick="cancelTryOut('GETapi-conta-banco--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conta-banco--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conta-banco/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-conta-banco--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-conta-banco--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-conta-banco--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-conta-banco--id-"
               value="eligendi"
               data-component="url">
    <br>
<p>The ID of the conta banco. Example: <code>eligendi</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>conta_bancaria_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="conta_bancaria_id"                data-endpoint="GETapi-conta-banco--id-"
               value="15"
               data-component="url">
    <br>
<p>O valor do conta_bancaria_id Example: <code>15</code></p>
            </div>
                    </form>

                    <h2 id="conta-bancaria-PUTapi-conta-banco--id-">Atualizar conta bancaria</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Atualiza os dados de um conta bancaria conforme os dados inseridos</p>

<span id="example-requests-PUTapi-conta-banco--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/conta-banco/praesentium" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"banco_nome\": \"Itau\",
    \"agencia_numero\": \"0927\",
    \"conta_numero\": \"509428\",
    \"saldo_inicial\": 25.28
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-banco/praesentium"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "banco_nome": "Itau",
    "agencia_numero": "0927",
    "conta_numero": "509428",
    "saldo_inicial": 25.28
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-conta-banco--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;conta_bancaria_id&quot;: 1,
        &quot;banco_nome&quot;: &quot;eius&quot;,
        &quot;agencia_numero&quot;: &quot;9629&quot;,
        &quot;conta_numero&quot;: &quot;849426&quot;,
        &quot;saldo_inicial&quot;: 984.91,
        &quot;created_at&quot;: &quot;2023-02-20T18:38:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-20T18:38:16.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-conta-banco--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-conta-banco--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-conta-banco--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-conta-banco--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-conta-banco--id-"></code></pre>
</span>
<form id="form-PUTapi-conta-banco--id-" data-method="PUT"
      data-path="api/conta-banco/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-conta-banco--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-conta-banco--id-"
                    onclick="tryItOut('PUTapi-conta-banco--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-conta-banco--id-"
                    onclick="cancelTryOut('PUTapi-conta-banco--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-conta-banco--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/conta-banco/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/conta-banco/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-conta-banco--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-conta-banco--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-conta-banco--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-conta-banco--id-"
               value="praesentium"
               data-component="url">
    <br>
<p>The ID of the conta banco. Example: <code>praesentium</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>conta_bancaria_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="conta_bancaria_id"                data-endpoint="PUTapi-conta-banco--id-"
               value="10"
               data-component="url">
    <br>
<p>O valor do conta_bancaria_id Example: <code>10</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>banco_nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="banco_nome"                data-endpoint="PUTapi-conta-banco--id-"
               value="Itau"
               data-component="body">
    <br>
<p>nome do banco. O campo value não pode ser superior a 255 caracteres. Example: <code>Itau</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agencia_numero</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="agencia_numero"                data-endpoint="PUTapi-conta-banco--id-"
               value="0927"
               data-component="body">
    <br>
<p>numero da agencia. O campo value não pode ser superior a 10 caracteres. Example: <code>0927</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conta_numero</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="conta_numero"                data-endpoint="PUTapi-conta-banco--id-"
               value="509428"
               data-component="body">
    <br>
<p>numero da conta. O campo value não pode ser superior a 10 caracteres. Example: <code>509428</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>saldo_inicial</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="saldo_inicial"                data-endpoint="PUTapi-conta-banco--id-"
               value="25.28"
               data-component="body">
    <br>
<p>saldo inicial da conta. Example: <code>25.28</code></p>
        </div>
        </form>

                    <h2 id="conta-bancaria-DELETEapi-conta-banco--id-">Excluir conta bancaria</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>exclui os dados de um conta bancaria</p>

<span id="example-requests-DELETEapi-conta-banco--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/conta-banco/consequatur" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-banco/consequatur"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-conta-banco--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-conta-banco--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-conta-banco--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-conta-banco--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-conta-banco--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-conta-banco--id-"></code></pre>
</span>
<form id="form-DELETEapi-conta-banco--id-" data-method="DELETE"
      data-path="api/conta-banco/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-conta-banco--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-conta-banco--id-"
                    onclick="tryItOut('DELETEapi-conta-banco--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-conta-banco--id-"
                    onclick="cancelTryOut('DELETEapi-conta-banco--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-conta-banco--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/conta-banco/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-conta-banco--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-conta-banco--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-conta-banco--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-conta-banco--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the conta banco. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>conta_bancaria_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="conta_bancaria_id"                data-endpoint="DELETEapi-conta-banco--id-"
               value="15"
               data-component="url">
    <br>
<p>O valor do conta_bancaria_id Example: <code>15</code></p>
            </div>
                    </form>

                <h1 id="conta-pagar">Conta Pagar</h1>

    

                                <h2 id="conta-pagar-GETapi-conta-pagar">Listar contas a pagar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>retorna todas as contas a pagar do banco</p>

<span id="example-requests-GETapi-conta-pagar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/conta-pagar" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-pagar"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-conta-pagar">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;conta_pagar_id&quot;: 1,
            &quot;fornecedor_id&quot;: &quot;10&quot;,
            &quot;descricao&quot;: &quot;Conta de luz&quot;,
            &quot;valor&quot;: &quot;137.38&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;
        },
        {
            &quot;conta_pagar_id&quot;: 2,
            &quot;fornecedor_id&quot;: &quot;5&quot;,
            &quot;descricao&quot;: &quot;Conta de agua&quot;,
            &quot;valor&quot;: &quot;152.53&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conta-pagar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conta-pagar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conta-pagar" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-conta-pagar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conta-pagar"></code></pre>
</span>
<form id="form-GETapi-conta-pagar" data-method="GET"
      data-path="api/conta-pagar"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conta-pagar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conta-pagar"
                    onclick="tryItOut('GETapi-conta-pagar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conta-pagar"
                    onclick="cancelTryOut('GETapi-conta-pagar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conta-pagar" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conta-pagar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-conta-pagar"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-conta-pagar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-conta-pagar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="conta-pagar-POSTapi-conta-pagar">Criar conta a pagar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>cria um conta a pagar conforme os dados inseridos</p>

<span id="example-requests-POSTapi-conta-pagar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/conta-pagar" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fornecedor_id\": 1,
    \"descricao\": \"conta de luz\",
    \"valor\": 105.6
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-pagar"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fornecedor_id": 1,
    "descricao": "conta de luz",
    "valor": 105.6
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-conta-pagar">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;conta_pagar_id&quot;: 1,
        &quot;fornecedor_id&quot;: &quot;10&quot;,
        &quot;descricao&quot;: &quot;Conta de luz&quot;,
        &quot;valor&quot;: &quot;137.38&quot;,
        &quot;created_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-conta-pagar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-conta-pagar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-conta-pagar" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-conta-pagar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-conta-pagar"></code></pre>
</span>
<form id="form-POSTapi-conta-pagar" data-method="POST"
      data-path="api/conta-pagar"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-conta-pagar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-conta-pagar"
                    onclick="tryItOut('POSTapi-conta-pagar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-conta-pagar"
                    onclick="cancelTryOut('POSTapi-conta-pagar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-conta-pagar" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/conta-pagar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-conta-pagar"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-conta-pagar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-conta-pagar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fornecedor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor_id"                data-endpoint="POSTapi-conta-pagar"
               value="1"
               data-component="body">
    <br>
<p>id do fornecedor. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>descricao</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="descricao"                data-endpoint="POSTapi-conta-pagar"
               value="conta de luz"
               data-component="body">
    <br>
<p>Descrição da conta. O campo value não pode ser superior a 255 caracteres. Example: <code>conta de luz</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>valor</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="valor"                data-endpoint="POSTapi-conta-pagar"
               value="105.6"
               data-component="body">
    <br>
<p>valor da conta. Example: <code>105.6</code></p>
        </div>
        </form>

                    <h2 id="conta-pagar-GETapi-conta-pagar--id-">Retorna conta a Pagar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>retorna uma conta a pagar com base no id passado</p>

<span id="example-requests-GETapi-conta-pagar--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/conta-pagar/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-pagar/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-conta-pagar--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;conta_pagar_id&quot;: 1,
        &quot;fornecedor_id&quot;: &quot;10&quot;,
        &quot;descricao&quot;: &quot;Conta de luz&quot;,
        &quot;valor&quot;: &quot;137.38&quot;,
        &quot;created_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conta-pagar--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conta-pagar--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conta-pagar--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-conta-pagar--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conta-pagar--id-"></code></pre>
</span>
<form id="form-GETapi-conta-pagar--id-" data-method="GET"
      data-path="api/conta-pagar/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conta-pagar--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conta-pagar--id-"
                    onclick="tryItOut('GETapi-conta-pagar--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conta-pagar--id-"
                    onclick="cancelTryOut('GETapi-conta-pagar--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conta-pagar--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conta-pagar/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-conta-pagar--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-conta-pagar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-conta-pagar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-conta-pagar--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the conta pagar. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="conta-pagar-PUTapi-conta-pagar--id-">Atualizar conta a pagar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Atualiza os dados de uma conta a pagar conforme os dados inseridos</p>

<span id="example-requests-PUTapi-conta-pagar--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/conta-pagar/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fornecedor_id\": 1,
    \"descricao\": \"conta de luz\",
    \"valor\": 105.6
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-pagar/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fornecedor_id": 1,
    "descricao": "conta de luz",
    "valor": 105.6
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-conta-pagar--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;conta_pagar_id&quot;: 1,
        &quot;fornecedor_id&quot;: &quot;10&quot;,
        &quot;descricao&quot;: &quot;Conta de luz&quot;,
        &quot;valor&quot;: &quot;137.38&quot;,
        &quot;created_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-20T20:18:16.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-conta-pagar--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-conta-pagar--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-conta-pagar--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-conta-pagar--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-conta-pagar--id-"></code></pre>
</span>
<form id="form-PUTapi-conta-pagar--id-" data-method="PUT"
      data-path="api/conta-pagar/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-conta-pagar--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-conta-pagar--id-"
                    onclick="tryItOut('PUTapi-conta-pagar--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-conta-pagar--id-"
                    onclick="cancelTryOut('PUTapi-conta-pagar--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-conta-pagar--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/conta-pagar/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/conta-pagar/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-conta-pagar--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-conta-pagar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-conta-pagar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-conta-pagar--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the conta pagar. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fornecedor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="fornecedor_id"                data-endpoint="PUTapi-conta-pagar--id-"
               value="1"
               data-component="body">
    <br>
<p>id do fornecedor. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>descricao</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="descricao"                data-endpoint="PUTapi-conta-pagar--id-"
               value="conta de luz"
               data-component="body">
    <br>
<p>Descrição da conta. O campo value não pode ser superior a 255 caracteres. Example: <code>conta de luz</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>valor</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="valor"                data-endpoint="PUTapi-conta-pagar--id-"
               value="105.6"
               data-component="body">
    <br>
<p>valor da conta. Example: <code>105.6</code></p>
        </div>
        </form>

                    <h2 id="conta-pagar-DELETEapi-conta-pagar--id-">Excluir conta a pagar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>exclui os dados de uma conta a pagar</p>

<span id="example-requests-DELETEapi-conta-pagar--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/conta-pagar/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/conta-pagar/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-conta-pagar--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-conta-pagar--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-conta-pagar--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-conta-pagar--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-conta-pagar--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-conta-pagar--id-"></code></pre>
</span>
<form id="form-DELETEapi-conta-pagar--id-" data-method="DELETE"
      data-path="api/conta-pagar/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-conta-pagar--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-conta-pagar--id-"
                    onclick="tryItOut('DELETEapi-conta-pagar--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-conta-pagar--id-"
                    onclick="cancelTryOut('DELETEapi-conta-pagar--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-conta-pagar--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/conta-pagar/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-conta-pagar--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-conta-pagar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-conta-pagar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-conta-pagar--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the conta pagar. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>contaPagar</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="contaPagar"                data-endpoint="DELETEapi-conta-pagar--id-"
               value="2"
               data-component="url">
    <br>
<p>O valor do contaPagar_id Example: <code>2</code></p>
            </div>
                    </form>

                <h1 id="fornecedor">Fornecedor</h1>

    

                                <h2 id="fornecedor-GETapi-fornecedor">Listar Fornecedores</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>retorna todos os fornecedores do banco</p>

<span id="example-requests-GETapi-fornecedor">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/fornecedor" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fornecedor"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-fornecedor">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;fornecedor_id&quot;: 1,
            &quot;nome&quot;: &quot;Melody Fritsch&quot;,
            &quot;endereco&quot;: &quot;2652 Rath Avenue\nLake Bertramland, CT 55149-5788&quot;,
            &quot;telefone&quot;: &quot;561.970.6152&quot;,
            &quot;email&quot;: &quot;rthompson@gmail.com&quot;,
            &quot;created_at&quot;: &quot;2023-02-18T15:03:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-18T15:03:56.000000Z&quot;
        },
        {
            &quot;fornecedor_id&quot;: 2,
            &quot;nome&quot;: &quot;Leilani Gleichner MD&quot;,
            &quot;endereco&quot;: &quot;836 Katrine Locks\nWest Charley, ND 84776&quot;,
            &quot;telefone&quot;: &quot;1-850-363-7890&quot;,
            &quot;email&quot;: &quot;ahmed.leffler@schowalter.org&quot;,
            &quot;created_at&quot;: &quot;2023-02-18T15:03:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-18T15:03:56.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-fornecedor" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-fornecedor"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fornecedor" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-fornecedor" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fornecedor"></code></pre>
</span>
<form id="form-GETapi-fornecedor" data-method="GET"
      data-path="api/fornecedor"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-fornecedor', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-fornecedor"
                    onclick="tryItOut('GETapi-fornecedor');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-fornecedor"
                    onclick="cancelTryOut('GETapi-fornecedor');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-fornecedor" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/fornecedor</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-fornecedor"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-fornecedor"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-fornecedor"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="fornecedor-POSTapi-fornecedor">Criar Fornecedor</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>cria um fornecedor conforme os dados inseridos</p>

<span id="example-requests-POSTapi-fornecedor">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/fornecedor" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"Fornecedor de agua\",
    \"endereco\": \"rua x, numero y, bairro z\",
    \"email\": \"fornecedor@teste.com\",
    \"telefone\": \"(11) 11111111111\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fornecedor"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "Fornecedor de agua",
    "endereco": "rua x, numero y, bairro z",
    "email": "fornecedor@teste.com",
    "telefone": "(11) 11111111111"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-fornecedor">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;fornecedor_id&quot;: 11,
        &quot;nome&quot;: &quot;nome teste&quot;,
        &quot;endereco&quot;: &quot;endereco teste&quot;,
        &quot;telefone&quot;: &quot;telefone teste&quot;,
        &quot;email&quot;: null,
        &quot;created_at&quot;: &quot;2023-02-19T18:07:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-19T18:07:58.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-fornecedor" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-fornecedor"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fornecedor" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-fornecedor" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fornecedor"></code></pre>
</span>
<form id="form-POSTapi-fornecedor" data-method="POST"
      data-path="api/fornecedor"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-fornecedor', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-fornecedor"
                    onclick="tryItOut('POSTapi-fornecedor');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-fornecedor"
                    onclick="cancelTryOut('POSTapi-fornecedor');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-fornecedor" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/fornecedor</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-fornecedor"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-fornecedor"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-fornecedor"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="nome"                data-endpoint="POSTapi-fornecedor"
               value="Fornecedor de agua"
               data-component="body">
    <br>
<p>nome do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>Fornecedor de agua</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>endereco</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="endereco"                data-endpoint="POSTapi-fornecedor"
               value="rua x, numero y, bairro z"
               data-component="body">
    <br>
<p>endereco do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>rua x, numero y, bairro z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-fornecedor"
               value="fornecedor@teste.com"
               data-component="body">
    <br>
<p>email do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>fornecedor@teste.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>telefone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="telefone"                data-endpoint="POSTapi-fornecedor"
               value="(11) 11111111111"
               data-component="body">
    <br>
<p>telefone do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>(11) 11111111111</code></p>
        </div>
        </form>

                    <h2 id="fornecedor-GETapi-fornecedor--fornecedor_id-">Retorna Fornecedor</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>retorna um fornecedor com base no id passado</p>

<span id="example-requests-GETapi-fornecedor--fornecedor_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/fornecedor/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fornecedor/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-fornecedor--fornecedor_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;fornecedor_id&quot;: 11,
        &quot;nome&quot;: &quot;nome teste&quot;,
        &quot;endereco&quot;: &quot;endereco teste&quot;,
        &quot;telefone&quot;: &quot;telefone teste&quot;,
        &quot;email&quot;: null,
        &quot;created_at&quot;: &quot;2023-02-19T18:07:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-19T18:07:58.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-fornecedor--fornecedor_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-fornecedor--fornecedor_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fornecedor--fornecedor_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-fornecedor--fornecedor_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fornecedor--fornecedor_id-"></code></pre>
</span>
<form id="form-GETapi-fornecedor--fornecedor_id-" data-method="GET"
      data-path="api/fornecedor/{fornecedor_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-fornecedor--fornecedor_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-fornecedor--fornecedor_id-"
                    onclick="tryItOut('GETapi-fornecedor--fornecedor_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-fornecedor--fornecedor_id-"
                    onclick="cancelTryOut('GETapi-fornecedor--fornecedor_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-fornecedor--fornecedor_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/fornecedor/{fornecedor_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-fornecedor--fornecedor_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-fornecedor--fornecedor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-fornecedor--fornecedor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fornecedor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor_id"                data-endpoint="GETapi-fornecedor--fornecedor_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the fornecedor. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fornecedor</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor"                data-endpoint="GETapi-fornecedor--fornecedor_id-"
               value="9"
               data-component="url">
    <br>
<p>O valor do fornecedor_id Example: <code>9</code></p>
            </div>
                    </form>

                    <h2 id="fornecedor-PUTapi-fornecedor--fornecedor_id-">Atualizar Fornecedor</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Atualiza os dados de um fornecedor conforme os dados inseridos</p>

<span id="example-requests-PUTapi-fornecedor--fornecedor_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/fornecedor/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"Fornecedor de agua\",
    \"endereco\": \"rua x, numero y, bairro z\",
    \"email\": \"fornecedor@teste.com\",
    \"telefone\": \"(11) 11111111111\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fornecedor/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "Fornecedor de agua",
    "endereco": "rua x, numero y, bairro z",
    "email": "fornecedor@teste.com",
    "telefone": "(11) 11111111111"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-fornecedor--fornecedor_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;fornecedor_id&quot;: 11,
        &quot;nome&quot;: &quot;nome teste&quot;,
        &quot;endereco&quot;: &quot;endereco teste&quot;,
        &quot;telefone&quot;: &quot;telefone teste&quot;,
        &quot;email&quot;: null,
        &quot;created_at&quot;: &quot;2023-02-19T18:07:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-02-19T18:07:58.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-fornecedor--fornecedor_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-fornecedor--fornecedor_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-fornecedor--fornecedor_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-fornecedor--fornecedor_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-fornecedor--fornecedor_id-"></code></pre>
</span>
<form id="form-PUTapi-fornecedor--fornecedor_id-" data-method="PUT"
      data-path="api/fornecedor/{fornecedor_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-fornecedor--fornecedor_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-fornecedor--fornecedor_id-"
                    onclick="tryItOut('PUTapi-fornecedor--fornecedor_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-fornecedor--fornecedor_id-"
                    onclick="cancelTryOut('PUTapi-fornecedor--fornecedor_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-fornecedor--fornecedor_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/fornecedor/{fornecedor_id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/fornecedor/{fornecedor_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fornecedor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor_id"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the fornecedor. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fornecedor</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="12"
               data-component="url">
    <br>
<p>O valor do fornecedor_id Example: <code>12</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="nome"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="Fornecedor de agua"
               data-component="body">
    <br>
<p>nome do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>Fornecedor de agua</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>endereco</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="endereco"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="rua x, numero y, bairro z"
               data-component="body">
    <br>
<p>endereco do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>rua x, numero y, bairro z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="fornecedor@teste.com"
               data-component="body">
    <br>
<p>email do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>fornecedor@teste.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>telefone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="telefone"                data-endpoint="PUTapi-fornecedor--fornecedor_id-"
               value="(11) 11111111111"
               data-component="body">
    <br>
<p>telefone do fornecedor. O campo value não pode ser superior a 255 caracteres. Example: <code>(11) 11111111111</code></p>
        </div>
        </form>

                    <h2 id="fornecedor-DELETEapi-fornecedor--fornecedor_id-">Excluir Fornecedor</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>exclui os dados de um fornecedor</p>

<span id="example-requests-DELETEapi-fornecedor--fornecedor_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/fornecedor/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fornecedor/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-fornecedor--fornecedor_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-fornecedor--fornecedor_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-fornecedor--fornecedor_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-fornecedor--fornecedor_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-fornecedor--fornecedor_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-fornecedor--fornecedor_id-"></code></pre>
</span>
<form id="form-DELETEapi-fornecedor--fornecedor_id-" data-method="DELETE"
      data-path="api/fornecedor/{fornecedor_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-fornecedor--fornecedor_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-fornecedor--fornecedor_id-"
                    onclick="tryItOut('DELETEapi-fornecedor--fornecedor_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-fornecedor--fornecedor_id-"
                    onclick="cancelTryOut('DELETEapi-fornecedor--fornecedor_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-fornecedor--fornecedor_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/fornecedor/{fornecedor_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-fornecedor--fornecedor_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-fornecedor--fornecedor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-fornecedor--fornecedor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fornecedor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor_id"                data-endpoint="DELETEapi-fornecedor--fornecedor_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the fornecedor. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fornecedor</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fornecedor"                data-endpoint="DELETEapi-fornecedor--fornecedor_id-"
               value="6"
               data-component="url">
    <br>
<p>O valor do fornecedor_id Example: <code>6</code></p>
            </div>
                    </form>

                <h1 id="usuarios">Usuarios</h1>

    

                                <h2 id="usuarios-GETapi-user">Listagem de Usuarios</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Retorna todos os usuarios cadastrados</p>

<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Lucas-msf&quot;,
    &quot;email&quot;: &quot;lucas@email.com&quot;,
    &quot;created_at&quot;: &quot;2023-02-17T19:23:05.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-02-17T19:24:27.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
