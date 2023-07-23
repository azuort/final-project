import React from 'react';
import { Switch, Route } from 'react-router-dom';
import Home from '../Components/Home/Home';
import Blog from '../Components/Blog/AllBlogs';
import NotFound from '../Components/NotFound/NotFound';

const AppRoutes = () => {
  return (
    <Switch>
      <Route path="/" exact component={Home} />
      <Route path="/about" component={Blog} />
      <Route component={NotFound} />
    </Switch>
  );
};

export default AppRoutes;