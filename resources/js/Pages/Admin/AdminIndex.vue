<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const jobs = ref([
  {
    title: "Junior Accounting Staff",
    company: "Mobili Restaurant Solutions",
    location: "Caloocan City, Metro Manila",
    industry: "Bookkeeping & Small Practice Accounting (Accounting)",
    employment_type: "Full time",
    salary: "₱19,000 – ₱20,000 per month",
    posted: "4h ago",
    about:
      'Onprem Concepts Corporation is a manufacturing company specializing in meat processing, condiments and baked goods. Our products include sauces, hotdogs, "tocino", ham and breads, such as loaves and buns. These are distributed in various wet markets and retail outlets.',
    qualification1: "Candidate must be a graduate of B.S. Accountancy",
    qualification2: "Accounting experience is an advantage, but not required",
    qualification3: "Fresh Graduates are welcome to apply",
    qualification4: "Must be proficient in MS Excel and MS Word",
    qualification5: "Excellent written and verbal communication skills",
    qualification6:
      "Ability to learn and retain accounting terminology, policies and procedures",
    qualification7:
      "With ability to work under less supervision and strong multi-tasking skills",
    qualification8:
      "Open to change and committed to continuous process improvement.",
    task1:
      "Review of Vouchers Payable, Check Vouchers and other accounting related documents",
    task2:
      "Preparation of all Bureau of Internal Revenue (BIR) requirements (filing and payment) of monthly, quarterly and annual tax returns",
    task3:
      "Preparation of Trial Balance together with all related accounting schedules such as but not limited to: bank reconciliation, schedule of income and expense, outstanding accounts receivables and accounts payables, and the likes",
    task4: "Preparation of books of accounts for BIR submission",
    task5: "Maintain records and files as required",
    task6: "Any other acts related to the Accounting Department’s deliverables",
    benefits:
      "Government-Mandated Benefits; 13th-month Pay, Holiday Pay, and contributions to the Social Security System (SSS), Philippine Health Insurance Corporation (PhilHealth), Pag-ibig Fund (HDMF).",
    question1: "What's your expected monthly basic salary?",
    question2: "How many years' experience do you have as an Accounting Staff?",
    question3:
      "Which of the following Microsoft Office products are you experienced with?",
    question4: "Which of the following accounting tasks are you familiar with?",
  },
  {
    title: "Senior Software Engineer",
    company: "Tech Innovations Inc.",
    location: "Manila, Philippines",
    industry: "Information Technology (Software)",
    employment_type: "Full time",
    salary: "₱80,000 – ₱100,000 per month",
    posted: "1d ago",
    about:
      "Tech Innovations Inc. is a leading software development company focusing on creating innovative solutions for various industries. Our team is composed of highly skilled individuals dedicated to delivering high-quality software products to our clients.",
    qualification1: "Bachelor's degree in Computer Science or related field",
    qualification2: "5+ years of experience in software development",
    qualification3: "Proficient in Java, Spring Boot, and Angular",
    qualification4: "Experience with Agile methodologies",
    qualification5: "Strong problem-solving and analytical skills",
    qualification6: "Excellent communication and teamwork abilities",
    qualification7: "Ability to mentor junior developers",
    qualification8:
      "Willingness to learn new technologies and adapt to changing environments.",
    task1: "Design, develop, and maintain high-quality software solutions",
    task2: "Participate in all phases of the software development lifecycle",
    task3:
      "Collaborate with cross-functional teams to define, design, and ship new features",
    task4: "Troubleshoot, debug, and resolve software issues",
    task5: "Conduct code reviews and ensure compliance with coding standards",
    task6: "Stay updated with the latest technologies and industry trends",
    benefits:
      "Competitive salary package, Health insurance, Paid time off, Flexible working hours, Professional development opportunities.",
    question1: "What's your expected monthly basic salary?",
    question2:
      "How many years' experience do you have in software development?",
    question3: "Which programming languages are you proficient in?",
    question4: "Describe your experience with Agile methodologies.",
  },
  {
    title: "Marketing Manager",
    company: "Global Tech Solutions",
    location: "Makati City, Metro Manila",
    industry: "Marketing & Advertising (Technology)",
    employment_type: "Full time",
    salary: "₱70,000 – ₱90,000 per month",
    posted: "2d ago",
    about:
      "Global Tech Solutions is a leading technology company specializing in digital solutions for businesses worldwide. Our innovative products and services empower organizations to thrive in the digital era.",
    qualification1:
      "Bachelor's degree in Marketing, Business Administration, or related field",
    qualification2: "3+ years of experience in marketing management",
    qualification3: "Proven track record of successful marketing campaigns",
    qualification4:
      "Strong understanding of digital marketing strategies and techniques",
    qualification5: "Excellent analytical and problem-solving skills",
    qualification6: "Exceptional communication and leadership abilities",
    qualification7:
      "Ability to manage multiple projects and deadlines effectively",
    qualification8: "Creative thinker with a passion for driving results.",
    task1:
      "Develop and implement strategic marketing plans to achieve company objectives",
    task2:
      "Manage and oversee all marketing campaigns, including digital, print, and social media",
    task3:
      "Analyze market trends and customer insights to optimize marketing strategies",
    task4:
      "Collaborate with cross-functional teams to execute marketing initiatives",
    task5: "Monitor and report on the performance of marketing campaigns",
    task6: "Lead and mentor a team of marketing professionals",
    benefits:
      "Competitive salary package, Health insurance, Paid time off, Flexible working hours, Professional development opportunities.",
    question1: "What's your expected monthly basic salary?",
    question2:
      "How many years' experience do you have in marketing management?",
    question3: "Describe your experience with digital marketing strategies.",
    question4:
      "How do you stay updated with the latest marketing trends and technologies?",
  },
  {
    title: "Customer Support Specialist",
    company: "E-Commerce Solutions Inc.",
    location: "Quezon City, Metro Manila",
    industry: "Customer Service & Support (E-Commerce)",
    employment_type: "Full time",
    salary: "₱25,000 – ₱30,000 per month",
    posted: "3d ago",
    about:
      "E-Commerce Solutions Inc. is a leading provider of e-commerce platforms for businesses of all sizes. We empower merchants to build and grow their online stores with our innovative solutions and dedicated support.",
    qualification1: "Bachelor's degree in any field",
    qualification2:
      "1+ years of experience in customer support or related role",
    qualification3: "Excellent communication and interpersonal skills",
    qualification4: "Strong problem-solving abilities and attention to detail",
    qualification5:
      "Ability to multitask and prioritize in a fast-paced environment",
    qualification6:
      "Familiarity with e-commerce platforms and online shopping processes",
    qualification7: "Experience with CRM software is a plus",
    qualification8:
      "Customer-oriented mindset with a passion for helping others.",
    task1:
      "Provide timely and professional assistance to customers via email, chat, and phone",
    task2:
      "Resolve customer inquiries and issues in a courteous and efficient manner",
    task3:
      "Assist customers with order placement, product inquiries, and account management",
    task4: "Document customer interactions and follow up on unresolved issues",
    task5:
      "Collaborate with cross-functional teams to escalate complex issues and provide feedback for process improvements",
    task6: "Stay updated on product features, promotions, and company policies",
    benefits:
      "Competitive salary package, Health insurance, Paid time off, Flexible working hours, Opportunities for career growth and advancement.",
    question1: "What's your expected monthly basic salary?",
    question2: "How many years' experience do you have in customer support?",
    question3:
      "Describe a challenging customer support issue you resolved successfully.",
    question4:
      "How do you handle stress and pressure in a customer-facing role?",
  },
  {
    title: "Graphic Designer",
    company: "Creative Media Agency",
    location: "Taguig City, Metro Manila",
    industry: "Creative Design & Multimedia (Advertising)",
    employment_type: "Full time",
    salary: "₱40,000 – ₱50,000 per month",
    posted: "1w ago",
    about:
      "Creative Media Agency is a leading advertising agency specializing in innovative design and multimedia solutions. We collaborate with clients to create compelling visual experiences that captivate audiences and drive results.",
    qualification1:
      "Bachelor's degree in Graphic Design, Fine Arts, or related field",
    qualification2: "2+ years of experience in graphic design",
    qualification3:
      "Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign)",
    qualification4:
      "Strong portfolio showcasing creative and impactful designs",
    qualification5:
      "Excellent understanding of design principles and typography",
    qualification6:
      "Ability to conceptualize and execute designs based on client briefs",
    qualification7:
      "Experience with video editing and motion graphics is a plus",
    qualification8:
      "Detail-oriented with strong organizational and time management skills.",
    task1:
      "Collaborate with clients and internal teams to understand design requirements and objectives",
    task2:
      "Conceptualize and create visually appealing graphics for various digital and print media",
    task3:
      "Design and produce marketing materials, including brochures, banners, social media graphics, and advertisements",
    task4: "Edit and retouch images to enhance visual impact and quality",
    task5:
      "Ensure brand consistency and adherence to design guidelines across all projects",
    task6:
      "Stay updated on industry trends and best practices in graphic design",
    benefits:
      "Competitive salary package, Health insurance, Paid time off, Professional development opportunities, Creative and collaborative work environment.",
    question1: "What's your expected monthly basic salary?",
    question2: "How many years' experience do you have in graphic design?",
    question3:
      "Describe a challenging design project you worked on and how you overcame obstacles.",
    question4:
      "What inspires you creatively, and how do you incorporate it into your design process?",
  },
  // Add more job listings here as needed
]);
const selectedJob = ref(null);

const showDetails = (index) => {
  selectedJob.value = jobs.value[index];
};
</script>

<template>
  <Head title="Dashboard" />

  <AdminLayout>
    <h1>Hello, Arvin Felicen!</h1>
  </AdminLayout>
</template>
