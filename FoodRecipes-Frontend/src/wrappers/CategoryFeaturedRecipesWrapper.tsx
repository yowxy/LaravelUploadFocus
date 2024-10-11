import { Swiper, SwiperSlide } from "swiper/react";
import FeaturedRecipeCard from "../components/FeaturedRecipeCard";
import { Category } from "../types/type";
import { useEffect, useState } from "react";
import axios from "axios";
import { Link, useParams } from "react-router-dom";

export default function CategoryFeaturedRecipesWrapper() {

    const { slug } = useParams<{slug: string}>();
    const [category, setCategory] = useState<Category | null>(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);

    useEffect(() => {
        axios.get(`http://127.0.0.1:8000/api/category/${slug}`,{
            headers: {
              'X-API-KEY': 'dahcyodhasdapppsd'
            }
          }  )
            .then(response => {
                setCategory(response.data.data);
                setLoading(false);
            })
            .catch(error => {
                setError(error.message || "An error occurred");
                setLoading(false);
            });
    },[slug]);

    // If loading, show loading message
    if(loading){
        return <p>Loading...</p>
    }

    // If there was an error, display the error message
    if(error){
        return <p>Error loading data: {error}</p>
    }

    // If category is null or category.recipes is undefined, display a message
    if (!category || !category.recipes || category.recipes.length === 0) {
        return <p>Belum ada data recipe dari kategori tersebut</p>;
    }

    // Otherwise, render the Swiper with recipe cards
    return (
        <section id="MadeByPeople">
            <div className="flex items-center justify-between px-5">
                <h2 className="font-bold">Made by People</h2>
                <a
                    href="#"
                    className="font-semibold text-sm leading-[21px] text-[#FF4C1C]"
                >
                    Explore All
                </a>
            </div>
            <div className="swiper w-full mt-3">
                <Swiper
                    className="w-full mt-3"
                    direction="horizontal"
                    spaceBetween={16}
                    slidesPerView="auto"
                    slidesOffsetBefore={20}
                    slidesOffsetAfter={20}
                >
                    {category.recipes.map((recipe) => (
                        <SwiperSlide key={recipe.id} className="!w-fit">
                            <Link to={`/recipe/${recipe.slug}`} key={recipe.id}>
                            <FeaturedRecipeCard recipe={recipe} />  
                            </Link>
                        </SwiperSlide>
                    ))}
                </Swiper>
            </div>
        </section>
    );
}
