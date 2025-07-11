# Shoppia

**Shoppia** একটি আধুনিক, ইউজার-ফ্রেন্ডলি এবং সম্পূর্ণ ফিচারড ই-কমার্স ওয়েব অ্যাপ্লিকেশন। Laravel, Vue.js এবং Inertia.js এর সমন্বয়ে এটি তৈরি করা হয়েছে, যা স্কেলেবল এবং ইন্টার‍্যাকটিভ শপিং অভিজ্ঞতা নিশ্চিত করে।

---

## 📌 প্রজেক্ট হাইলাইটস

✅ ক্যাটেগরি, সাব-ক্যাটেগরি ও ব্র্যান্ড অনুযায়ী প্রোডাক্ট ফিল্টার  
✅ হোমপেজে ডাইনামিক স্লাইডার, ফ্ল্যাশ সেল ও বেস্ট সেলিং প্রোডাক্ট  
✅ রিয়েল টাইম কাউন্টডাউন সহ ফ্ল্যাশ সেল  
✅ ইউজার ও অ্যাডমিন প্যানেল আলাদা  
✅ প্রোডাক্ট CRUD ও ফিচার অনুযায়ী ফিল্টার  
✅ SEO ফ্রেন্ডলি স্লাগ  
✅ স্টোরেজে ইমেজ আপলোড (Laravel `storage:link`)

---

## 🧰 টেকনোলজি স্ট্যাক

| Layer        | Tech Used               |
|--------------|--------------------------|
| Backend      | Laravel 10 (UUID ব্যবহার) |
| Frontend     | Vue 3 + Inertia.js       |
| Authentication | Laravel Breeze        |
| Styling      | Tailwind CSS             |
| Database     | MySQL                    |
| Storage      | Laravel Public Disk      |

---

## 🛠️ ইন্সটলেশন গাইড

```bash
# প্রজেক্ট ক্লোন করুন
git clone https://github.com/sahinislam101/Shoppia.git
cd Shoppia

# Composer Dependency
composer install

# NPM Dependency
npm install && npm run dev

# .env সেটআপ
cp .env.example .env
php artisan key:generate

# ডাটাবেজ মাইগ্রেশন ও সিডার চালান
php artisan migrate --seed

# Storage Link তৈরি করুন
php artisan storage:link

# সার্ভার রান করুন
php artisan serve
