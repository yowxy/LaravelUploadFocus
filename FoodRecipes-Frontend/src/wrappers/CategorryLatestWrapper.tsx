import { Link, useParams } from "react-router-dom";
import RecipeCardResults from "../components/RecipeCardResults";
import { useEffect, useState } from "react";
import { Category } from "../types/type";
import axios from "axios";

export default function CategoryLatestWrapper() {


    const { slug } = useParams<{slug: string}>();
    const [category, setCategory] = useState<Category | null>(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);

    useEffect(() => {
        axios.get(`http://127.0.0.1:8000/api/category/${slug}`)
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




    return(
        <section id="LatestRecipes" className="px-5 mt-[30px]">
        <div className="flex items-center justify-between">
          <h2 className="font-bold">Latest Recipes</h2>
        </div>
        <div className="flex flex-col gap-[18px] mt-[18px]">

        {category.recipes.length > 0 ? (
            category.recipes.map((recipe) => (
                <Link to={`/recipe/${recipe.slug}`} key={recipe.id}>
                    <RecipeCardResults key={recipe.id} recipe={recipe}></RecipeCardResults>
                </Link>
            ))) :(<p>Belum ada data</p>)
        }
        </div>
      </section>
    );
}