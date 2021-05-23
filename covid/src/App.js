import React, {Component} from 'react';
import Reports from  './reports/report'

class App extends Component{
  // create a state to hold dynamic data from the API
  state= {
    reports:[]
  }
  // calling the API
  componentDidMount(){
    fetch('http://https://disease.sh/v3/covid-19/countries/kenya')
    .then(res=>res.json())
    .then((data)=>{
      this.setState({reports:data})
    })
    .catch(console.log)
  }
  render (){
    return (
      <Reports report={this.state.report} />
    );
  }
}
export default App;
