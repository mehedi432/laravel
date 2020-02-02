import 'package:flutter/material.dart';


class HorizontalList extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
    height: 89.0,
    child: ListView(
      
      scrollDirection: Axis.horizontal,
      children: <Widget>[
        Padding(
          padding: const EdgeInsets.all(8.0),
          child: Card(
              shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(15.0),
            ),
            elevation: 1.6,
            child: InkWell(
              splashColor: Colors.blue.withAlpha(30),
              onTap: () {
                print("xiaomi clicked");
              },
                child: Container(
                height: 144,
                width: 89,
                child: Center(child: Text("Xiaomi")),
              ),
            ),
          ),
        ),
        Padding(
          padding: const EdgeInsets.all(8.0),
          child: Card(
            elevation: 1.6,
            child: Container(
              height: 144,
              width: 89,
              child: Center(child: Text("OnePlus", textAlign: TextAlign.center,)),

            ),
          ),
        ),
        Padding(
          padding: const EdgeInsets.all(8.0),
          child: Card(
            elevation: 1.6,
            child: Container(
              height: 144,
              width: 89,
              child: Center(child: Text("Huawei", textAlign: TextAlign.center,)),

            ),
          ),
        ),
        Padding(
          padding: const EdgeInsets.all(8.0),
          child: Card(
            elevation: 1.6,
            child: Container(
              height: 144,
              width: 89,
              child: Center(child: Text("Samsung", textAlign: TextAlign.center,)),
            ),
          ),
        ),
        Padding(
          padding: const EdgeInsets.all(8.0),
          child: Card(
            elevation: 1.6,
            child: Container(
              height: 144,
              width: 89,
              child: Center(child: Text("Mens", textAlign: TextAlign.center,)),
            ),
          ),
        )
      ],

    ),
    
      );
  }
}

Widget degisnedCard() {
  return Card(
    child: InkWell(
      onTap: () {},
      child: Container(

      ),
    ),
    
  );
}

