import React from 'react';
import styles from './App.module.css'
import SearchBar from './Components/SearchBar/SearchBar';

type AppProps = {
  
}

const App = ({  } : AppProps) => {

  return (
    <div className={styles.container}>
      <SearchBar />
    </div>
  );

};

export default App;