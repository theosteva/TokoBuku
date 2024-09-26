<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('l5-swagger.documentations.'.$documentation.'.api.title')}} - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ l5_swagger_asset($documentation, 'swagger-ui.css') }}">
    <link rel="icon" type="image/png" href="{{ l5_swagger_asset($documentation, 'favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ l5_swagger_asset($documentation, 'favicon-16x16.png') }}" sizes="16x16"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .dashboard-header {
            background-color: #343a40;
            color: white;
            padding: 1rem;
        }
        .dashboard-content {
            padding: 2rem;
        }
        .swagger-ui .topbar {
            display: none;
        }
        .swagger-ui .info {
            margin: 20px 0;
        }
        .swagger-ui .scheme-container {
            box-shadow: none;
            padding: 0;
        }
        .swagger-ui .opblock-tag {
            font-size: 24px;
            margin: 20px 0;
        }
        .swagger-ui .opblock {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
    @if(config('l5-swagger.ui.custom_css'))
        @foreach(config('l5-swagger.ui.custom_css') as $css)
            <link rel="stylesheet" href="{{ $css }}">
        @endforeach
    @endif
</head>
<body>
    <div class="dashboard-header">
        <div class="container">
            <h1>{{config('l5-swagger.documentations.'.$documentation.'.api.title')}} Dashboard</h1>
        </div>
    </div>
    <div class="container dashboard-content">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">API Documentation</a>
                    <a href="#" class="list-group-item list-group-item-action">Analytics</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="swagger-ui"></div>
            </div>
        </div>
    </div>

    <script src="{{ l5_swagger_asset($documentation, 'swagger-ui-bundle.js') }}"></script>
    <script src="{{ l5_swagger_asset($documentation, 'swagger-ui-standalone-preset.js') }}"></script>
    <script>
        window.onload = function() {
            const ui = SwaggerUIBundle({
                dom_id: '#swagger-ui',
                url: "{!! $urlToDocs !!}",
                operationsSorter: {!! isset($operationsSorter) ? '"' . $operationsSorter . '"' : 'null' !!},
                configUrl: {!! isset($configUrl) ? '"' . $configUrl . '"' : 'null' !!},
                validatorUrl: {!! isset($validatorUrl) ? '"' . $validatorUrl . '"' : 'null' !!},
                oauth2RedirectUrl: "{{ route('l5-swagger.'.$documentation.'.oauth2_callback', [], $useAbsolutePath) }}",
                requestInterceptor: function(request) {
                    request.headers['X-CSRF-TOKEN'] = '{{ csrf_token() }}';
                    return request;
                },
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                plugins: [
                    SwaggerUIBundle.plugins.DownloadUrl
                ],
                layout: "BaseLayout",
                docExpansion : "{!! config('l5-swagger.defaults.ui.display.doc_expansion', 'none') !!}",
                deepLinking: true,
                filter: {!! config('l5-swagger.defaults.ui.display.filter') ? 'true' : 'false' !!},
                persistAuthorization: "{!! config('l5-swagger.defaults.ui.authorization.persist_authorization') ? 'true' : 'false' !!}",
            })

            window.ui = ui

            @if(in_array('oauth2', array_column(config('l5-swagger.defaults.securityDefinitions.securitySchemes'), 'type')))
            ui.initOAuth({
                usePkceWithAuthorizationCodeGrant: "{!! (bool)config('l5-swagger.defaults.ui.authorization.oauth2.use_pkce_with_authorization_code_grant') !!}"
            })
            @endif
        }
    </script>
</body>
</html>
