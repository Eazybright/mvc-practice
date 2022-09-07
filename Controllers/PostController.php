<?php

class PostsController
{
    public function updateAction(Request $request)
    {
        if (
            $request->request->has('submit') &&
            Validator::validate($request->request->post)
        ) {
            $postService = new PostService();
            try {
                $postService->createPost(
                    $request->request->get('title'),
                    $request->request->get('content')
                );
                $this->addFlash(
                    'notice',
                    'Post has been created successfully!'
                );
            } catch (Exception $e) {
                $this->addFlash(
                    'error',
                    'Unable to create the post!'
                );
            }
        }
        return $this->render('posts/update-result.html.twig');
    }
}
