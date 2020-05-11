/**
 * A React Native App for loading or fetching json data
 * https://github.com/facebook/react-native
 * @flow
 */
import 'react-native-gesture-handler';
import { NavigationContainer } from '@react-navigation/native';
import React, { Component } from 'react';
import {
  StyleSheet,
  Text,
  View,
  FlatList,
  ActivityIndicator,
  Button,
} from 'react-native';
// import data from './json/FetchJsonDataExample.json';

export default class SuraScreen extends Component {
  constructor(props) {
    super(props);

    this.state = {
      isLoading: true, // check if json data (online) is fetching
      dataSource: [], // store an object of json data
    };
  }

  componentDidMount() {
    return fetch("http://127.0.0.1:8000/api/sura_names")
          .then((response) => response.json())
          .then((responseJson) => {
            console.log(responseJson);
            // set state value
            this.setState({
              isLoading: false, // already loading
              dataSource: responseJson
            });
          })
          .catch((error) => {
            ToastAndroid.show(error.toString(), ToastAndroid.SHORT);
          });
  }

  render() {
    // show waiting screen when json data is fetching
    if(this.state.isLoading) {
      return(
        <View style={{flex: 1, padding: 20}}>
          <ActivityIndicator/>
        </View>
      )
    }
    const Stack = createStackNavigator();
    return(
      <NavigationContainer>
        <View style={{flex: 1, paddingTop:20}}>
          <FlatList
            data={this.state.dataSource}
            renderItem={({item}) => {
              return (
                <View>
                    <Text style={styles.info}>{item.id}  {item.sura_name} </Text>
                </View>
              )
            }}
            keyExtractor={(item, index) => index.toString()}
          />
        </View>
      </NavigationContainer>
    );
  }
}

const styles = StyleSheet.create({
  info: {
    fontSize: 20,
  }
});
