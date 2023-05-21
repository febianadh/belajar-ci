public function delete($id = null)
    {
        $products = $this->session->get('products');
        $data = null;

        $_new_products = [];

        foreach ($products as $item) {
            if ($item['id'] == $id) {
                $data = $item;
                continue;
            }

            array_push($_new_products, $item);
        }

        if (!$data) {
            throw new \Exception("Data not found!");
        }

        $this->session->set('products', $_new_products);
        return redirect()->to('/product');
    }