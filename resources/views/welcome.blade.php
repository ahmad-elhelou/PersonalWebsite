<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ahmad Mazen Elhelou - Senior Backend Developer & System Architect">
    <title>Ahmad Mazen Elhelou | Senior Backend Developer & System Architect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'slate-950': '#0f172a',
                        'slate-800': '#1e293b',
                        'slate-700': '#334155',
                        'sky-500': '#0ea5e9',
                        'sky-600': '#0284c7',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'float': 'float 6s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #0284c7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="bg-slate-950 text-white font-inter antialiased">
    {{-- Header Section --}}
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden z-10">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-950 to-slate-900 z-0"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_40%,rgba(14,165,233,0.1),transparent_50%)] z-0"></div>
        
        <div class="relative z-20 text-center px-6 animate-fade-in">
            <div class="mb-8">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-br from-sky-500 to-sky-600 flex items-center justify-center text-4xl font-bold shadow-2xl animate-float">
                    AME
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-4 gradient-text">
                    Ahmad Mazen Elhelou
                </h1>
                <p class="text-xl md:text-2xl text-slate-300 font-light">
                    Senior Backend Developer & System Architect
                </p>
            </div>
            
            {{-- Contact Cards --}}
            <div class="flex flex-wrap justify-center gap-4 mt-12">
                @php
                    $contacts = [
                        ['icon' => 'M4 7L10.94 11.3375C11.5885 11.7428 12.4115 11.7428 13.06 11.3375L20 7M5 18H19C20.1046 18 21 17.1046 21 16V8C21 6.89543 20.1046 6 19 6H5C3.89543 6 3 6.89543 3 8V16C3 17.1046 3.89543 18 5 18Z', 'label' => 'Email', 'value' => 'ahmedmazenhelou2001@gmail.com'],
                        ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Phone', 'value' => '(+974) 3308 4336'],
                        ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'label' => 'Location', 'value' => 'Doha, Qatar']
                    ];
                @endphp
                
                @foreach($contacts as $contact)
                <div class="glass-effect rounded-xl p-4 hover:bg-slate-800/50 transition-all duration-300 hover:scale-105">
                    <svg class="w-6 h-6 mx-auto mb-2 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $contact['icon'] }}"></path>
                    </svg>
                    <div class="text-sm text-slate-400">{{ $contact['label'] }}</div>
                    <div class="font-medium">{{ $contact['value'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </header>

    {{-- Executive Summary --}}
    <section class="py-20 px-6 relative z-30 bg-slate-950">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Executive Summary</h2>
            <div class="glass-effect rounded-2xl p-8 animate-slide-up">
                <p class="text-lg leading-relaxed text-slate-300">
                    Accomplished Senior Backend Developer and System Architect with exceptional resilience demonstrated through maintaining critical systems during wartime conditions in Gaza. Proven track record of delivering strategic technology solutions that drive operational efficiency, including $20,000+ in cost savings and performance improvements from 20 seconds to milliseconds. Distinguished academic achiever with top-of-class performance (94% average) and global experience across three countries, combining technical excellence with leadership in humanitarian technology initiatives serving vulnerable populations.
                </p>
            </div>
        </div>
    </section>

    {{-- Academic Excellence --}}
    <section class="py-20 px-6 bg-slate-900 relative z-30">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Academic Excellence</h2>
            <div class="grid md:grid-cols-2 gap-8">
                @php
                    $education = [
                        [
                            'institution' => 'Islamic University of Gaza (IUG)',
                            'location' => 'Gaza, Palestine',
                            'period' => '2019 - 2025',
                            'degree' => 'Computer Engineering',
                            'achievement' => 'Top of Class - 94% Average',
                            'highlight' => true
                        ],
                        [
                            'institution' => 'University of Doha for Science & Technology',
                            'location' => 'Doha, Qatar',
                            'period' => 'Aug 2024 – Jan 2025',
                            'degree' => 'Bachelor in Software Engineering',
                            'achievement' => 'Exchange Program',
                            'highlight' => false
                        ],
                        [
                            'institution' => 'Universitat Autònoma de Barcelona',
                            'location' => 'Barcelona, Spain',
                            'period' => 'Aug 2022 - Feb 2023',
                            'degree' => 'Erasmus Exchange',
                            'achievement' => 'Machine Learning, Computer Vision',
                            'highlight' => false
                        ],
                        [
                            'institution' => 'Hassan AL-Harazin High School',
                            'location' => 'Palestine',
                            'period' => '2018 - 2019',
                            'degree' => 'Scientific Track',
                            'achievement' => '98.9% - Ranked First',
                            'highlight' => true
                        ]
                    ];
                @endphp
                
                @foreach($education as $edu)
                <div class="glass-effect rounded-xl p-6 hover:bg-slate-800/50 transition-all duration-300 {{ $edu['highlight'] ? 'border-sky-500/30' : '' }}">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold {{ $edu['highlight'] ? 'text-sky-400' : 'text-white' }}">
                                {{ $edu['institution'] }}
                            </h3>
                            <p class="text-slate-400">{{ $edu['location'] }}</p>
                        </div>
                        <span class="text-sm text-slate-500 bg-slate-800 rounded-full px-3 py-1">{{ $edu['period'] }}</span>
                    </div>
                    <p class="text-white font-medium mb-2">{{ $edu['degree'] }}</p>
                    <p class="text-sky-400 font-semibold">{{ $edu['achievement'] }}</p>
                    @if($edu['highlight'])
                        <div class="w-full h-1 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full mt-4"></div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Technical Expertise --}}
    <section class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Technical Expertise</h2>
            <div class="grid lg:grid-cols-2 gap-8">
                @php
                    $skillCategories = [
                        [
                            'title' => 'Programming Languages',
                            'skills' => ['PHP', 'JavaScript', 'Java', 'Python', 'C++', 'C#', 'SQL', 'Assembly (MASM)', 'HTML/CSS'],
                            'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'
                        ],
                        [
                            'title' => 'Technologies & Frameworks',
                            'skills' => ['Laravel', 'VueJs', 'ASP.NET', 'Docker', 'jQuery', 'Git', 'Unity', 'VHDL', 'Linux'],
                            'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-4.05.5L6.05 15.21a2 2 0 00-1.806.547A1.934 1.934 0 004 16.75v4.5A1.75 1.75 0 005.75 23h12.5A1.75 1.75 0 0020 21.25v-4.5a1.934 1.934 0 00-.572-.822z'
                        ],
                        [
                            'title' => 'Testing & DevOps',
                            'skills' => ['Pest', 'PHPUnit', 'Jest', 'Pytest', 'Puppeteer', 'Wireshark', 'AMT'],
                            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
                        ],
                        [
                            'title' => 'Specialized Skills',
                            'skills' => ['Machine Learning', 'Computer Vision', 'System Architecture', 'Database Design', 'API Development'],
                            'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                        ]
                    ];
                @endphp
                
                @foreach($skillCategories as $category)
                <div class="glass-effect rounded-xl p-6 hover:bg-slate-800/50 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-sky-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $category['icon'] }}"></path>
                        </svg>
                        <h3 class="text-xl font-semibold">{{ $category['title'] }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach($category['skills'] as $skill)
                        <span class="bg-slate-800 text-sky-400 px-3 py-1 rounded-full text-sm font-medium hover:bg-sky-500 hover:text-white transition-colors duration-300">
                            {{ $skill }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Professional Experience --}}
    <section class="py-20 px-6 bg-slate-900/50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Professional Experience</h2>
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-sky-500 to-sky-600"></div>
                
                @php
                    $experiences = [
                        [
                            'title' => 'Teaching Assistant',
                            'company' => 'Islamic University of Gaza (IUG)',
                            'location' => 'Gaza, Palestine',
                            'period' => 'April 2025 - Present',
                            'achievements' => [
                                'Mentoring undergraduate students in advanced computer engineering concepts',
                                'Supporting academic research initiatives and curriculum development',
                                'Leading laboratory sessions and technical workshops'
                            ],
                            'current' => true
                        ],
                        [
                            'title' => 'Computer Engineer & System Architect',
                            'company' => 'Dar Al-Quran',
                            'location' => 'Palestine',
                            'period' => 'April 2022 – Present',
                            'achievements' => [
                                'Architected critical humanitarian systems including orphan sponsorship platform serving 1000+ beneficiaries',
                                'Delivered $20,000+ in operational cost savings through payroll automation and process optimization',
                                'Enhanced system performance by 99.9% (20 seconds to milliseconds) through strategic database optimization',
                                'Led "Safwat Al-Huffaz 2" project coordination, managing cross-functional teams under challenging conditions',
                                'Developed resilient Telegram Bot infrastructure maintaining 99.9% uptime during wartime disruptions'
                            ],
                            'current' => true
                        ],
                        [
                            'title' => 'Lead Developer',
                            'company' => 'Booklet - بوكليت',
                            'location' => 'Remote',
                            'period' => 'Apr 2024 - Sep 2024',
                            'achievements' => [
                                'Integrated enterprise-level Zatcha compliance system ensuring regulatory adherence',
                                'Implemented advanced image compression algorithms improving load times by 60%',
                                'Enhanced user experience through responsive design and performance optimization',
                                'Managed full-stack development lifecycle from conception to deployment'
                            ],
                            'current' => false
                        ],
                        [
                            'title' => 'Research & Development Intern',
                            'company' => 'Computer Vision Center (CVC)',
                            'location' => 'Barcelona, Spain',
                            'period' => 'Nov 2022 – Dec 2022',
                            'achievements' => [
                                'Developed advanced data annotation platform for machine learning research',
                                'Collaborated with international research teams on computer vision projects',
                                'Gained expertise in cutting-edge ML and CV technologies',
                                'Contributed to academic research publications and technical documentation'
                            ],
                            'current' => false
                        ]
                    ];
                @endphp
                
                @foreach($experiences as $index => $exp)
                <div class="relative pl-20 pb-12">
                    <div class="absolute left-6 w-4 h-4 {{ $exp['current'] ? 'bg-sky-500' : 'bg-slate-600' }} rounded-full border-4 border-slate-950"></div>
                    <div class="glass-effect rounded-xl p-6 hover:bg-slate-800/50 transition-all duration-300">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-semibold text-sky-400 mb-1">{{ $exp['title'] }}</h3>
                                <p class="text-white font-medium">{{ $exp['company'] }}</p>
                                <p class="text-slate-400">{{ $exp['location'] }}</p>
                            </div>
                            <span class="text-sm text-slate-300 bg-slate-800 rounded-full px-3 py-1 mt-2 md:mt-0 self-start">
                                {{ $exp['period'] }}
                            </span>
                        </div>
                        <ul class="space-y-2">
                            @foreach($exp['achievements'] as $achievement)
                            <li class="flex items-start">
                                <span class="text-sky-500 mr-2 mt-1">▸</span>
                                <span class="text-slate-300">{{ $achievement }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Honors & Certifications --}}
    <section class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Honors & Certifications</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="glass-effect rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-sky-400 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        Academic Honors
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">🏆</span>
                            <span class="text-slate-300">Top of Class - IUG Computer Engineering (94% Average)</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">🥇</span>
                            <span class="text-slate-300">First Rank - Hassan AL-Harazin High School (98.9%)</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">🏅</span>
                            <span class="text-slate-300">PCPC Medal & ACPC Candidate</span>
                        </li>
                    </ul>
                </div>
                
                <div class="glass-effect rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-sky-400 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Professional Certifications
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">📜</span>
                            <span class="text-slate-300">IELTS Band 7 - English Proficiency</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">🔐</span>
                            <span class="text-slate-300">CISCO Introduction to Cybersecurity</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">🛡️</span>
                            <span class="text-slate-300">IBM Cybersecurity Basics</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-sky-500 mr-2">⚡</span>
                            <span class="text-slate-300">Algorithms - Princeton University (Coursera)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Distinguished Projects --}}
    <section class="py-20 px-6 bg-slate-900/50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Distinguished Projects</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $projects = [
                        [
                            'title' => 'Humanitarian Aid Management System',
                            'description' => 'Enterprise-level platform managing $100K+ in aid distribution, serving 1000+ beneficiaries with real-time tracking and automated reporting.',
                            'tech' => ['Laravel', 'MySQL', 'Vue.js'],
                            'impact' => 'Strategic Impact',
                            'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
                        ],
                        [
                            'title' => 'Sponsor-Orphan Matching Platform',
                            'description' => 'AI-driven matching system connecting sponsors with orphans, featuring secure payment processing and impact analytics dashboard.',
                            'tech' => ['PHP', 'Machine Learning', 'PostgreSQL'],
                            'impact' => 'Social Innovation',
                            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                        ],
                        [
                            'title' => 'QR-based Attendance System',
                            'description' => 'Revolutionary attendance tracking system with 99.9% accuracy, reducing manual processing time by 95% and integrating with payroll systems.',
                            'tech' => ['Laravel', 'QR Technology', 'REST API'],
                            'impact' => 'Process Optimization',
                            'icon' => 'M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586l-2 2V5H5v14h3.414l2 2H4a1 1 0 01-1-1V4z'
                        ],
                        [
                            'title' => 'MIPS Architecture CPU',
                            'description' => 'Complete CPU implementation with custom instruction set, pipeline optimization, and hardware debugging capabilities for educational research.',
                            'tech' => ['VHDL', 'Assembly', 'Digital Design'],
                            'impact' => 'Technical Excellence',
                            'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'
                        ],
                        [
                            'title' => 'Resilient Telegram Bot',
                            'description' => 'Mission-critical communication system maintaining 99.9% uptime during wartime conditions, serving emergency coordination and community updates.',
                            'tech' => ['Python', 'Telegram API', 'Docker'],
                            'impact' => 'Crisis Management',
                            'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'
                        ],
                        [
                            'title' => 'Advanced Spam Detection System',
                            'description' => 'ML-powered spam detection with 96% accuracy, processing 10K+ messages daily with real-time classification and threat analysis.',
                            'tech' => ['Python', 'TensorFlow', 'NLP'],
                            'impact' => 'Security Innovation',
                            'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'
                        ]
                    ];
                @endphp
                
                @foreach($projects as $project)
                <div class="glass-effect rounded-xl p-6 hover:bg-slate-800/50 hover:scale-105 transition-all duration-300 group">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-sky-600 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $project['icon'] }}"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white group-hover:text-sky-400 transition-colors duration-300">
                                {{ $project['title'] }}
                            </h3>
                            <span class="text-sm text-sky-400 font-medium">{{ $project['impact'] }}</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-sm mb-4 leading-relaxed">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tech'] as $tech)
                        <span class="bg-slate-800 text-slate-300 px-2 py-1 rounded text-xs">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-12 px-6 border-t border-slate-800 relative z-30 bg-slate-950">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6">
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-sky-500 to-sky-600 flex items-center justify-center text-xl font-bold">
                    AME
                </div>
                <p class="text-lg text-slate-300 font-medium">
                    "Engineering resilient solutions that drive strategic impact and humanitarian advancement."
                </p>
            </div>
            <div class="text-slate-500 text-sm">
                <p>&copy; 2025 Ahmad Mazen Elhelou. All rights reserved.</p>
                <p class="mt-2">Crafted with precision for executive-level opportunities.</p>
            </div>
        </div>
    </footer>

    {{-- Smooth scrolling and performance optimization --}}
    <script>
        // Add smooth scrolling behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Observe all sections for animation
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Add dynamic background effects
        document.addEventListener('mousemove', (e) => {
            const cursor = e.clientX / window.innerWidth;
            const cursorY = e.clientY / window.innerHeight;
            
            document.querySelector('header').style.background = 
                `radial-gradient(circle at ${cursor * 100}% ${cursorY * 100}%, rgba(14,165,233,0.1), transparent 50%), 
                 linear-gradient(135deg, #1e293b, #0f172a, #334155)`;
        });

        // Performance optimization: Lazy load images and defer non-critical operations
        window.addEventListener('load', () => {
            // Add subtle parallax effect to header
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelector('header');
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            });

            // Add fade-in effect to cards on scroll
            const cards = document.querySelectorAll('.glass-effect');
            const cardObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
                    }
                });
            });

            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease-out';
                cardObserver.observe(card);
            });
        });

        // Add click tracking for analytics (placeholder)
        document.querySelectorAll('.glass-effect').forEach(element => {
            element.addEventListener('click', () => {
                // Analytics tracking placeholder
                console.log('Card interaction tracked');
            });
        });
    </script>
</body>
</html>