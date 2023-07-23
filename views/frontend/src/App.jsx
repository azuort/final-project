import React from 'react';
import { Routes, Route } from "react-router-dom";
import Home from '../src/Components/Home/Home';
import Blog from '../src/Components/Home/Home';



function App() {
  return (

      <div>
        <Routes>
          <Route path='/' element={<Home/>} />
          <Route path='/Blog' element={<Blog></Blog>}/>
        </Routes>
      </div>


   
  );
};

export default App
