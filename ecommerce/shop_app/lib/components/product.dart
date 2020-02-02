import 'package:flutter/material.dart';

class Product extends StatefulWidget {
  @override
  _ProductState createState() => _ProductState();
}

class _ProductState extends State<Product> {

  List product_list = [
    {
      "name": "Blazer",
      "picture": "images/products/blazer1.jpeg",
      "old-price": "144",
      "price": "89"
    },
    {
      "name": "Red Dress",
      "picture": "images/products/dress1.jpeg",
      "old-price": "89",
      "price": "55"
    },
  ];

  @override
  Widget build(BuildContext context) {
    return GridView.builder(
      itemCount: product_list.length,
      gridDelegate: SliverGridDelegateWithFixedCrossAxisCount(crossAxisCount: 3,
       ),
       itemBuilder: (BuildContext context, int index) {
         return Single_product(
           product_name: product_list[index]['name'],
           product_picture: product_list[index]['picture'],
           product_old_price: product_list[index]['old_price'],
           product_price: product_list[index]['price'],
         );
       },
    );
  }
}


class Single_product extends StatelessWidget {

  final product_name;
  final product_picture;
  final product_old_price;
  final product_price;

  Single_product({this.product_name, this.product_picture, this.product_old_price, this.product_price});


  @override
  Widget build(BuildContext context) {
    return Container(
      child: Text("Working"),
      
    );
  }
}