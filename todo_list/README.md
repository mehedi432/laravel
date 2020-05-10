    Using laravel collective for form data with custom components:
        1. Install laravel collective for gathering form data
        2. Set up config/app.php with providers as
            Collective\Html\HtmlServiceProvider::class,
        3. Set up aliases - two aliases
            'Form' => Collective\Html\FormFacade::class,
            'Html' => Collective\Html\HtmlFacade::class,
