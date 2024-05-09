<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from "@/Components/Navbar.vue";
import { ref } from "vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

const jobs = ref([
  {
    title: 'Junior Accounting Staff',
    company: 'Mobili Restaurant Solutions',
    location: 'Caloocan City, Metro Manila',
    industry: 'Bookkeeping & Small Practice Accounting (Accounting)',
    employment_type: 'Full time',
    salary: '₱19,000 – ₱20,000 per month',
    posted: '4h ago',
    about: 'Onprem Concepts Corporation is a manufacturing company specializing in meat processing, condiments and baked goods. Our products include sauces, hotdogs, "tocino", ham and breads, such as loaves and buns. These are distributed in various wet markets and retail outlets.',
    qualification1: 'Candidate must be a graduate of B.S. Accountancy',
    qualification2: 'Accounting experience is an advantage, but not required',
    qualification3: 'Fresh Graduates are welcome to apply',
    qualification4: 'Must be proficient in MS Excel and MS Word',
    qualification5: 'Excellent written and verbal communication skills',
    qualification6: 'Ability to learn and retain accounting terminology, policies and procedures',
    qualification7: 'With ability to work under less supervision and strong multi-tasking skills',
    qualification8: 'Open to change and committed to continuous process improvement.',
    task1: 'Review of Vouchers Payable, Check Vouchers and other accounting related documents',
    task2: 'Preparation of all Bureau of Internal Revenue (BIR) requirements (filing and payment) of monthly, quarterly and annual tax returns',
    task3: 'Preparation of Trial Balance together with all related accounting schedules such as but not limited to: bank reconciliation, schedule of income and expense, outstanding accounts receivables and accounts payables, and the likes',
    task4: 'Preparation of books of accounts for BIR submission',
    task5: 'Maintain records and files as required',
    task6: 'Any other acts related to the Accounting Department’s deliverables',
    benefits: 'Government-Mandated Benefits; 13th-month Pay, Holiday Pay, and contributions to the Social Security System (SSS), Philippine Health Insurance Corporation (PhilHealth), Pag-ibig Fund (HDMF).',
    question1: 'What\'s your expected monthly basic salary?',
    question2: 'How many years\' experience do you have as an Accounting Staff?',
    question3: 'Which of the following Microsoft Office products are you experienced with?',
    question4: 'Which of the following accounting tasks are you familiar with?',
  },
  {
    title: 'Senior Software Engineer',
    company: 'Tech Innovations Inc.',
    location: 'Manila, Philippines',
    industry: 'Information Technology (Software)',
    employment_type: 'Full time',
    salary: '₱80,000 – ₱100,000 per month',
    posted: '1d ago',
    about: 'Tech Innovations Inc. is a leading software development company focusing on creating innovative solutions for various industries. Our team is composed of highly skilled individuals dedicated to delivering high-quality software products to our clients.',
    qualification1: 'Bachelor\'s degree in Computer Science or related field',
    qualification2: '5+ years of experience in software development',
    qualification3: 'Proficient in Java, Spring Boot, and Angular',
    qualification4: 'Experience with Agile methodologies',
    qualification5: 'Strong problem-solving and analytical skills',
    qualification6: 'Excellent communication and teamwork abilities',
    qualification7: 'Ability to mentor junior developers',
    qualification8: 'Willingness to learn new technologies and adapt to changing environments.',
    task1: 'Design, develop, and maintain high-quality software solutions',
    task2: 'Participate in all phases of the software development lifecycle',
    task3: 'Collaborate with cross-functional teams to define, design, and ship new features',
    task4: 'Troubleshoot, debug, and resolve software issues',
    task5: 'Conduct code reviews and ensure compliance with coding standards',
    task6: 'Stay updated with the latest technologies and industry trends',
    benefits: 'Competitive salary package, Health insurance, Paid time off, Flexible working hours, Professional development opportunities.',
    question1: 'What\'s your expected monthly basic salary?',
    question2: 'How many years\' experience do you have in software development?',
    question3: 'Which programming languages are you proficient in?',
    question4: 'Describe your experience with Agile methodologies.',
  },
  {
  title: 'Marketing Manager',
  company: 'Global Tech Solutions',
  location: 'Makati City, Metro Manila',
  industry: 'Marketing & Advertising (Technology)',
  employment_type: 'Full time',
  salary: '₱70,000 – ₱90,000 per month',
  posted: '2d ago',
  about: 'Global Tech Solutions is a leading technology company specializing in digital solutions for businesses worldwide. Our innovative products and services empower organizations to thrive in the digital era.',
  qualification1: 'Bachelor\'s degree in Marketing, Business Administration, or related field',
  qualification2: '3+ years of experience in marketing management',
  qualification3: 'Proven track record of successful marketing campaigns',
  qualification4: 'Strong understanding of digital marketing strategies and techniques',
  qualification5: 'Excellent analytical and problem-solving skills',
  qualification6: 'Exceptional communication and leadership abilities',
  qualification7: 'Ability to manage multiple projects and deadlines effectively',
  qualification8: 'Creative thinker with a passion for driving results.',
  task1: 'Develop and implement strategic marketing plans to achieve company objectives',
  task2: 'Manage and oversee all marketing campaigns, including digital, print, and social media',
  task3: 'Analyze market trends and customer insights to optimize marketing strategies',
  task4: 'Collaborate with cross-functional teams to execute marketing initiatives',
  task5: 'Monitor and report on the performance of marketing campaigns',
  task6: 'Lead and mentor a team of marketing professionals',
  benefits: 'Competitive salary package, Health insurance, Paid time off, Flexible working hours, Professional development opportunities.',
  question1: 'What\'s your expected monthly basic salary?',
  question2: 'How many years\' experience do you have in marketing management?',
  question3: 'Describe your experience with digital marketing strategies.',
  question4: 'How do you stay updated with the latest marketing trends and technologies?',
},
{
  title: 'Customer Support Specialist',
  company: 'E-Commerce Solutions Inc.',
  location: 'Quezon City, Metro Manila',
  industry: 'Customer Service & Support (E-Commerce)',
  employment_type: 'Full time',
  salary: '₱25,000 – ₱30,000 per month',
  posted: '3d ago',
  about: 'E-Commerce Solutions Inc. is a leading provider of e-commerce platforms for businesses of all sizes. We empower merchants to build and grow their online stores with our innovative solutions and dedicated support.',
  qualification1: 'Bachelor\'s degree in any field',
  qualification2: '1+ years of experience in customer support or related role',
  qualification3: 'Excellent communication and interpersonal skills',
  qualification4: 'Strong problem-solving abilities and attention to detail',
  qualification5: 'Ability to multitask and prioritize in a fast-paced environment',
  qualification6: 'Familiarity with e-commerce platforms and online shopping processes',
  qualification7: 'Experience with CRM software is a plus',
  qualification8: 'Customer-oriented mindset with a passion for helping others.',
  task1: 'Provide timely and professional assistance to customers via email, chat, and phone',
  task2: 'Resolve customer inquiries and issues in a courteous and efficient manner',
  task3: 'Assist customers with order placement, product inquiries, and account management',
  task4: 'Document customer interactions and follow up on unresolved issues',
  task5: 'Collaborate with cross-functional teams to escalate complex issues and provide feedback for process improvements',
  task6: 'Stay updated on product features, promotions, and company policies',
  benefits: 'Competitive salary package, Health insurance, Paid time off, Flexible working hours, Opportunities for career growth and advancement.',
  question1: 'What\'s your expected monthly basic salary?',
  question2: 'How many years\' experience do you have in customer support?',
  question3: 'Describe a challenging customer support issue you resolved successfully.',
  question4: 'How do you handle stress and pressure in a customer-facing role?',
},
{
  title: 'Graphic Designer',
  company: 'Creative Media Agency',
  location: 'Taguig City, Metro Manila',
  industry: 'Creative Design & Multimedia (Advertising)',
  employment_type: 'Full time',
  salary: '₱40,000 – ₱50,000 per month',
  posted: '1w ago',
  about: 'Creative Media Agency is a leading advertising agency specializing in innovative design and multimedia solutions. We collaborate with clients to create compelling visual experiences that captivate audiences and drive results.',
  qualification1: 'Bachelor\'s degree in Graphic Design, Fine Arts, or related field',
  qualification2: '2+ years of experience in graphic design',
  qualification3: 'Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign)',
  qualification4: 'Strong portfolio showcasing creative and impactful designs',
  qualification5: 'Excellent understanding of design principles and typography',
  qualification6: 'Ability to conceptualize and execute designs based on client briefs',
  qualification7: 'Experience with video editing and motion graphics is a plus',
  qualification8: 'Detail-oriented with strong organizational and time management skills.',
  task1: 'Collaborate with clients and internal teams to understand design requirements and objectives',
  task2: 'Conceptualize and create visually appealing graphics for various digital and print media',
  task3: 'Design and produce marketing materials, including brochures, banners, social media graphics, and advertisements',
  task4: 'Edit and retouch images to enhance visual impact and quality',
  task5: 'Ensure brand consistency and adherence to design guidelines across all projects',
  task6: 'Stay updated on industry trends and best practices in graphic design',
  benefits: 'Competitive salary package, Health insurance, Paid time off, Professional development opportunities, Creative and collaborative work environment.',
  question1: 'What\'s your expected monthly basic salary?',
  question2: 'How many years\' experience do you have in graphic design?',
  question3: 'Describe a challenging design project you worked on and how you overcame obstacles.',
  question4: 'What inspires you creatively, and how do you incorporate it into your design process?',
},
  // Add more job listings here as needed
]);
const selectedJob = ref(null);

const showDetails = (index) => {
  selectedJob.value = jobs.value[index];
};
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 dark:bg-black">
       
       <nav class=" bg-blue-900 border-gray-200 dark:bg-gray-900 h-24">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
       <img src="@/Assets/smarthirelogo.png" class="w-30 h-24"/>
      <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SmartHire</span> -->
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
    <Link
        v-if="$page.props.auth.user"
        :href="route('smarthire.index')"
        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
    >
        Dashboard
    </Link>

    <template v-else>
        <Link
            :href="route('login')"
            class="mr-2 border-2 border-gold hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Log in
        </Link>

        <Link
            v-if="canRegister"
            :href="route('register')"
            class="border-2 text-white bg-gold focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Register
        </Link>
    </template>
</nav>
  </div>

 
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
       <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
      
    </ul>
  </div>
  </div>
</nav>

<div class="flex justify-center items-center bg-blue h-52">
    <form class="w-9/12">
      <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 1
              </button>
            </li>
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 2
              </button>
            </li>
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 3
              </button>
            </li>
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 4
              </button>
            </li>
          </ul>
        </div>
        <div class="relative w-full">
          <input
            type="search"
            id="search-dropdown"
            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
            placeholder="Search"
            required
          />
          <button
            type="submit"
            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gold rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            <svg
              class="w-4 h-4"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
              />
            </svg>
            <span class="sr-only">Search</span>
          </button>
        </div>
      </div>
    </form>
  </div>
 

  <div class="container mx-auto">
    <div class="grid grid-cols-3 mt-10">
      <!-- Items Column -->

      <div class="col-span-1">
        <h2 class="text-lg font-bold mb-4 px-14">Job Recruitments</h2>

        <div class="flex flex-col justify-center items-end">
          <div
            v-for="(job, index) in jobs"
            :key="index"
            @click="showDetails(index)"
            class="mt-6 w-11/12 p-6 bg-white border-2 border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 mb-4 cursor-pointer transition-colors duration-200 ease-in-out hover:border-2 hover:border-blue focus:border-4 focus:border-blue"
            tabindex="0"
          >
             <div class="p-6">
          <h3 class="text-lg font-semibold text-gray-900">{{ jobs.title }}</h3>
          <p class="mt-2 text-sm text-gray-600">{{ job.company }}</p>
          <p class="mt-2 text-sm text-gray-600">{{ job.location }}</p>
          <p class="mt-2 text-sm text-gray-600">{{ job.industry }}</p>
          <p class="mt-2 text-sm text-gray-600">{{ job.employment_type }}</p>
          <p class="mt-2 text-sm text-gray-600">Salary: {{ job.salary }}</p>
          <p class="mt-2 text-sm text-gray-600">Posted {{ job.posted }}</p>
          <div class="mt-4 flex justify-between items-center">
            <button class="text-sm text-blue-600 hover:underline focus:outline-none">View Details</button>
            <div class="text-sm text-gray-600">More jobs from this company</div>
          </div>
        </div>
          </div>
        </div>
      </div>

      <div class="col-span-2">
    <h2 class="text-lg font-bold mx-14">Job Details</h2>
    <div class="flex justify-center items-center sticky top-0">
        <div class="w-10/12 mt-10 overflow-y-auto p-6 h-screen rounded-xl" :class="{ '!selectedJob': !selectedJob }">
            <div v-if="selectedJob">
                <h3 class="text-xl font-semibold text-gray-900">{{ selectedJob.title }}</h3>
                <p class="mt-2 text-sm text-gray-600">{{ selectedJob.company }}</p>
                <p class="mt-2 text-sm text-gray-600">{{ selectedJob.location }}</p>
                <p class="mt-2 text-sm text-gray-600">{{ selectedJob.industry }}</p>
                <p class="mt-2 text-sm text-gray-600">{{ selectedJob.employment_type }}</p>
                <p class="mt-2 text-sm text-gray-600">Salary: {{ selectedJob.salary }}</p>
                <p class="mt-2 text-sm text-gray-600">Posted {{ selectedJob.posted }}</p>
                <p class="mt-4 text-lg font-semibold">About us</p>
                <p class="mt-2 text-sm text-gray-600">{{ selectedJob.about }}</p>
                <p class="mt-4 text-lg font-semibold">Qualifications & experience</p>
                <ul class="list-disc ml-6">
                    <li>{{ selectedJob.qualification1 }}</li>
                    <li>{{ selectedJob.qualification2 }}</li>
                    <li>{{ selectedJob.qualification3 }}</li>
                    <li>{{ selectedJob.qualification4 }}</li>
                    <li>{{ selectedJob.qualification5 }}</li>
                    <li>{{ selectedJob.qualification6 }}</li>
                    <li>{{ selectedJob.qualification7 }}</li>
                    <li>{{ selectedJob.qualification8 }}</li>
                </ul>
                <p class="mt-4 text-lg font-semibold">Tasks & responsibilities</p>
                <ul class="list-disc ml-6">
                    <li>{{ selectedJob.task1 }}</li>
                    <li>{{ selectedJob.task2 }}</li>
                    <li>{{ selectedJob.task3 }}</li>
                    <li>{{ selectedJob.task4 }}</li>
                    <li>{{ selectedJob.task5 }}</li>
                    <li>{{ selectedJob.task6 }}</li>
                </ul>
                <p class="mt-4 text-lg font-semibold">Benefits</p>
                <p class="mt-2 text-sm text-gray-600">{{ selectedJob.benefits }}</p>
                <p class="mt-4 text-lg font-semibold">Employer questions</p>
                <ul class="list-disc ml-6">
                    <li>{{ selectedJob.question1 }}</li>
                    <li>{{ selectedJob.question2 }}</li>
                    <li>{{ selectedJob.question3 }}</li>
                    <li>{{ selectedJob.question4 }}</li>
                </ul>
            </div>
            <div v-else>
                <h3 class="flex justify-center items-center mt-20 text-xl font-bold ">You haven't selected a job ad</h3>
                <h1 class="flex justify-center items-center">Select an ad on the left to see the details here.</h1>
            </div>
        </div>
    </div>
</div>

    </div>
  </div>
    </div>
</template>
