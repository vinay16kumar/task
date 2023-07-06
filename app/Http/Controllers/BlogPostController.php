<?php
namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogPostController extends Controller
{

    public function index()
    {
       
        // $items = BlogPost::paginate(10)->onEachSide(3);
        $items = BlogPost::all();
        


        return view('welcome', compact('items'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
      
        $blogPost = new BlogPost();
        $blogPost->title = $request->input('title');
        $blogPost->content = $request->input('content');
       
        $blogPost->save();

        return redirect('/posts/'.$blogPost->id)->with('success', 'Blog post created successfully');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        // dd($searchTerm);
        DB::connection()->enableQueryLog();
        $blogPosts = BlogPost::where('title', 'like', '%'.$searchTerm.'%')
            ->orWhere('content', 'like', '%'.$searchTerm.'%')
            ->orWhere('tags', 'like', '%'.$searchTerm.'%')
            ->get();
        //    dd($blogPosts);
        $queryLog = DB::getQueryLog();
        $responseTime = end($queryLog)['time'];

        Log::info("Query Response Time: " . $responseTime); 

        return view('posts.search', ['blogPosts' => $blogPosts]);
    }

    
    public function searchitem()
    {
        return view('posts.searchitem');
    }

    public function update($id)
    {
         
        $user = BlogPost::where('id',$id)->first();
     
            return view('posts.update', compact('user'));
    }

    
    public function updateblog(Request $request)
    {
        // dd($request->all());
        $id =  $request->id;
        
        
        $update = BlogPost::where('id', $id)->first();
        $event = BlogPost::find($id);
        // dd($event);
            if($event != null){
                $event->title =  $request->title;
            $event->content =  $request->content;
            $event->save();
           
            return redirect('/welcome');
           
            }
            else{

                echo "data not found";
        }




    }

    public function delete($id)
    {
        
        // dd($id);
        $menu = BlogPost::whereId($id)->delete();
        if(!is_null($menu)) {
            return redirect('/welcome');
        }
        echo "data not found";
    
    }


}