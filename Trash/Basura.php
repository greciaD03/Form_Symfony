    #[Route('/form/{id}', name: 'app_form')]
    public function index(int $id): Response
    {
        $number = random_int(0, $id);
        return new Response(
            '<html><body> Lucky number: '.$number.'</body></html>'
        ); 
    }

    #[Route('/dump', name: 'app_form')]
    public function form(): Response
    {
        return $this->render('form/index.html.twig', [
            'controller_name' => 'Hello Word!',
        ]);
    }
    
    #[Route('/form/{id}', name: 'app_form')]
    public function index(int $id): Response
    {
        $number = random_int(0, $id);
        return new Response(
            '<html><body> Lucky number: '.$number.'</body></html>'
        ); 
    }

    #[Route('/dump', name: 'app_form')]
    public function form(): Response
    {
        return $this->render('form/index.html.twig', [
            'controller_name' => 'Hello Word!',
        ]);
    }