{
    public function create_category (Request )
    {
        $category = new Category();
        $category->name = $request
    }

    public function get_all_categories(){
        $categories = Category::all();
        return view('all-categories' , [
            "categories" => $categories,
        ]);
    }
}
