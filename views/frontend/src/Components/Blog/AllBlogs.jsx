import React from 'react';

import {useLoaderData} from 'react-router-dom'

const AllBlogs = () => {
  const {posts} = useLoaderData()
  console.log(posts)
  return (
    <>
    {posts.length> 0 ?(
      posts.map((blog)=>(
        <div key={blog.id}>

          <h2>{blog.title}</h2>
          <p>{blog.content}</p>
          
        </div>
      ))
    ):(
      <p>No se encontraron Blogs</p>
    )}
    </>
  );
};

export default AllBlogs;

export const loaderBlog = async () =>{
  const res = await fetch('http://localhost:8000/api/blogs')
  const posts = await res.json()
  return{posts : posts};
}
