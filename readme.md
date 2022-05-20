# Blog Sederhana Menggunakan CI 3

## Installasi
- Import Database `db_blog.sql` ke dalam `phpmyadmin`.
- Lalu buka browser dan ketik di url [http://localhost/blog](http://localhost/blog).

## Screenshot
- Landing page

![landing page](screenshot/ss-landing.png)

- Login

![login](screenshot/ss-login.png)

- Halaman Admin
  - username: `admin`
  - password: `admin`

![admin](screenshot/ss-admin.png)

- Halaman Author
  > Terdapat perbedaan pada sidebar antara admin dan author.
  - username: `author`
  - password: `author`

![author](screenshot/ss-author.png)

- Halaman Add Account

![add_account](screenshot/ss-add-account.png)

- Halaman Author Management
> Hanya account dengan role author yang terdapat pada halaman ini.

![author manage](screenshot/ss-author-manage.png)

- Halaman Add Post

![add post](screenshot/ss-new-post.png)
![new post](screenshot/ss-new-post-2.png)

- Halaman Post Management

![post manage](screenshot/ss-post-manage.png)

- Edit Post

![edit post](screenshot/ss-edit.png)

- Delete Post
> Untuk security saya menggunakan function bawa javascript untuk bertanya terlebih dahulu sebelum hapus postingan.

![delete post](screenshot/ss-delete.png)
![delete post2](screenshot/ss-delete-1.png)



## Spesifikasi
- Codeigniter 3
- Template Simple Sidebar Bootstrap 5
