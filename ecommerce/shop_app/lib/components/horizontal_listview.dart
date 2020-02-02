import 'package:flutter/material.dart';


class HorizontalList extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
    height: 89.0,
    child: ListView(
      
      scrollDirection: Axis.horizontal,
      children: <Widget>[
 
        Category(
          image_location: 'images/cats/tshirt.png',
          image_caption: "Shirt",
        ),
        Category(
          image_location: 'images/cats/dress.png',
          image_caption: "Dress",
        ),
        Category(
          image_location: 'images/cats/jeans.png',
          image_caption: "Pants",
        ),        
        Category(
          image_location: 'images/cats/formal.png',
          image_caption: "Formal",
        ),
        Category(
          image_location: 'images/cats/informal.png',
          image_caption: "Informal",
        ),
        Category(
          image_location: 'images/cats/shoe.png',
          image_caption: "Shoe",
        ),
        Category(
          image_location: 'images/cats/accessories.png',
          image_caption: "More",
        ),
      ],
    ),
      );
  }
}


class Category extends StatelessWidget {
  final String image_location;
  final String image_caption;


  Category({this.image_caption, this.image_location});


  @override
  Widget build(BuildContext context) {
    return InkWell(
        
        child: Padding(
        padding: const EdgeInsets.all(0.0),
          child: InkWell(
            onTap: () {},
            child: Container(
              width: 89.0,
              height: 89.0,
              child: ListTile(
                title: Image.asset(image_location, width: 89.0, height: 55.0,),
                subtitle: Padding(
                  padding: const EdgeInsets.only(top: 8.0),
                  child: Container(
                    alignment: Alignment.topCenter,
                    child: Text(image_caption, style: TextStyle(fontSize: 13.0, fontWeight: FontWeight.w500),),
                  ),
                ),
              ),
            ),
          ),
      ),
    );
  }
}


