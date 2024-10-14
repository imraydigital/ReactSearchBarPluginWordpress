import React from 'react';
//CSS
import styles from './SearchBar.module.css';
import SearchIcon from './SearchIcon/SearchIcon';
//Components

//Data

type SearchBarProps = {

}

const SearchBar = ({ }: SearchBarProps) => {
    return (
        <div className={styles.container}>
            <input placeholder="I'm looking for..." />
            <SearchIcon />
        </div>

    );
};

export default SearchBar;