import 'package:flutter/material.dart';
import 'package:carousel_pro/carousel_pro.dart';


// My packages
import './components/horizontal_listview.dart';
import './components/product.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Kinen Shop',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        primarySwatch: Colors.purple,
      ),
      home: HomePage(title:'কিনেন'),
    );
  }
}

class HomePage extends StatefulWidget {
  HomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {

    Widget imageCarousel = Container(
      height: 144.0,
      child: Carousel(
        boxFit: BoxFit.cover,
        images: [
          AssetImage('images/m1.jpeg'),
          AssetImage('images/w1.jpeg'),
          AssetImage('images/w3.jpeg'),
          AssetImage('images/c1.jpg'),
        ],
        autoplay: true,
        animationCurve: Curves.fastOutSlowIn,
        animationDuration: Duration(microseconds: 1600),
      ),
    );

    return Scaffold(
      appBar: AppBar(
        elevation: 0.3,
        title: Text(
          'দোকান',
          style: TextStyle(fontWeight: FontWeight.w800, fontSize: 21.0),
        ),
        centerTitle: true,
        backgroundColor: Colors.purple,
        actions: <Widget>[
          IconButton(
            icon: Icon(
              Icons.search,
              color: Colors.white,
            ),
            onPressed: () {
              print('Searche pressed');
            },
          ),
                    IconButton(
            icon: Icon(
              Icons.shopping_cart,
              color: Colors.white,
            ),
            onPressed: () {
              print('Searche pressed');
            },
          ),
        ],
      ),

      drawer: Drawer(
        child: ListView(
          children: <Widget>[
            // Header
            UserAccountsDrawerHeader(
              accountName: Text(
                'Mehedi Abdullah',
                style:
                    TextStyle(letterSpacing: 1.2, fontWeight: FontWeight.w800),
              ),
              accountEmail: Text(
                'mehedi@gmail.com',
                style:
                    TextStyle(letterSpacing: 1.2, fontWeight: FontWeight.w800),
              ),
              currentAccountPicture: GestureDetector(
                child: CircleAvatar(
                  backgroundColor: Colors.purpleAccent,
                  child: Icon(
                    Icons.person,
                    color: Colors.white,
                    size: 55.0,
                  ),
                ),
              ),
              decoration: BoxDecoration(color: Colors.purple),
            ),
            // Body of drawer
            InkWell(
              child: ListTile(
                title: Text(
                  'Home page',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.home,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('Home pressed');
              },
            ),
            InkWell(
              child: ListTile(
                title: Text(
                  'My account',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.person,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('My Account');
              },
            ),
            InkWell(
              child: ListTile(
                title: Text(
                  'My order',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.shopping_basket,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('My order pressed');
              },
            ),
            InkWell(
              child: ListTile(
                title: Text(
                  'Categories',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.category,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('Category pressed');
              },
            ),
            InkWell(
              child: ListTile(
                title: Text(
                  'Favourite',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.favorite,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('Home pressed');
              },
            ),
            Divider(),

            InkWell(
              child: ListTile(
                title: Text(
                  'Settings',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.settings,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('Home pressed');
              },
            ),
            InkWell(
              child: ListTile(
                title: Text(
                  'About us',
                  style: TextStyle(
                      fontWeight: FontWeight.w500, letterSpacing: 1.2),
                ),
                leading: Icon(
                  Icons.question_answer,
                  size: 21.0,
                  color: Colors.purple,
                ),
              ),
              splashColor: Colors.purple,
              onTap: () {
                print('Home pressed');
              },
            ),
          ],
        ),
      ),

      body: ListView(
        children: <Widget>[
          // আমাদের Carousel এর অংশ -- (১)
          imageCarousel,

          Padding(
            padding: EdgeInsets.all(8.0),
            child: Text('Categories' , style: TextStyle(
              fontWeight: FontWeight.bold
            ),
          ),),
          
          // Horizontal list view এখান থেকে শুরু -- (২)
          HorizontalList(),

          // Recent Items grid view --- (৩)
          Padding(
            padding: EdgeInsets.all(8.0),
            child: Text('Recent Items' , style: TextStyle(
              fontWeight: FontWeight.bold
            ),
          ),
        ),

        // GridView এখান থেকে শুরু 
        Container(
          height: 377.0,
          child: Product(),

        )

        ],
      ),
    );
  }
}
