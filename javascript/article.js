const postsPerPage = 8; // عدد البوستات في كل صفحة
let currentPage = 1; // الصفحة الحالية
const postsList = document.querySelector("#posts-list"); // قائمة البوستات
const prevPageLink = document.querySelector("#prev-page"); // رابط الصفحة السابقة
const nextPageLink = document.querySelector("#next-page"); // رابط الصفحة التالية
const posts = [
  // تحديد بوستات الصفحة
  { id: 1, title: "بوست 1" },
  { id: 2, title: "بوست 2" },
  { id: 3, title: "بوست 3" },
  { id: 4, title: "بوست 4" },
  { id: 5, title: "بوست 5" },
  { id: 6, title: "بوست 6" },
  { id: 7, title: "بوست 7" },
  { id: 8, title: "بوست 8" },
  { id: 9, title: "بوست 9" },
  { id: 10, title: "بوست 10" },
  { id: 11, title: "بوست 11" },
  { id: 12, title: "بوست 12" },
  { id: 13, title: "بوست 13" },
  { id: 14, title: "بوست 14" },
  { id: 15, title: "بوست 15" },
  { id: 16, title: "بوست 16" }
];

function displayPosts(posts, currentPage) {
  // يتم عرض البوستات بناءً على الصفحة الحالية
  const startIndex = (currentPage - 1) * postsPerPage;
  const endIndex = startIndex + postsPerPage;
  const currentPosts = posts.slice(startIndex, endIndex);

  postsList.innerHTML = "";
  currentPosts.forEach(post => {
    const li = document.createElement("li");
    li.innerText = post.title;
    postsList.appendChild(li);
  });
}

function handlePaginationClick(event) {
  // التحقق
}