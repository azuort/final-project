import React from 'react';
import {useLoaderData} from 'react-router-dom'

const AllBlogs = () => {
  const {posts} = useLoaderData()
  console.log(posts)
  return "Blog";
};

export default AllBlogs;

export const loaderBlog = async () =>{
  const res = await fetch('http://localhost:8000/api/blogs')
  const posts = await res.json()
  return{posts : posts};
}
