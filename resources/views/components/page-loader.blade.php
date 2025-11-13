<!-- Unique Page Loader -->
<div id="page-loader" class="page-loader">
    <div class="loader-container">
        <!-- Animated Logo/Icon -->
        <div class="loader-logo">
            <div class="logo-circle">
                <div class="logo-inner"></div>
            </div>
            <div class="logo-pulse"></div>
        </div>
        
        <!-- Animated Text -->
        <div class="loader-text-container">
            <div class="loader-text">
                <span class="text-char" data-char="L">L</span>
                <span class="text-char" data-char="O">O</span>
                <span class="text-char" data-char="A">A</span>
                <span class="text-char" data-char="D">D</span>
                <span class="text-char" data-char="I">I</span>
                <span class="text-char" data-char="N">N</span>
                <span class="text-char" data-char="G">G</span>
                <span class="text-char" data-char=".">.</span>
                <span class="text-char" data-char=".">.</span>
                <span class="text-char" data-char=".">.</span>
            </div>
        </div>
        
        <!-- Animated Progress Bar -->
        <div class="progress-container">
            <div class="progress-bar">
                <div class="progress-fill"></div>
                <div class="progress-glow"></div>
            </div>
        </div>
        
        <!-- Floating Particles -->
        <div class="particles">
            <div class="particle" style="--delay: 0s"></div>
            <div class="particle" style="--delay: 0.2s"></div>
            <div class="particle" style="--delay: 0.4s"></div>
            <div class="particle" style="--delay: 0.6s"></div>
            <div class="particle" style="--delay: 0.8s"></div>
            <div class="particle" style="--delay: 1s"></div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="bg-elements">
            <div class="bg-circle bg-circle-1"></div>
            <div class="bg-circle bg-circle-2"></div>
            <div class="bg-circle bg-circle-3"></div>
        </div>
    </div>
</div>

<style>
.page-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
    overflow: hidden;
}

.page-loader.hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

.loader-container {
    text-align: center;
    position: relative;
    z-index: 2;
}

/* Logo Animation */
.loader-logo {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto 30px;
}

.logo-circle {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
    background-size: 400% 400%;
    animation: gradientShift 3s ease infinite, rotate 2s linear infinite;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
}

.logo-inner {
    width: 60%;
    height: 60%;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    animation: pulse 2s ease-in-out infinite;
}

.logo-pulse {
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    animation: pulseRing 2s ease-out infinite;
}

/* Text Animation */
.loader-text-container {
    margin-bottom: 30px;
}

.loader-text {
    font-size: 24px;
    font-weight: 700;
    color: white;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    letter-spacing: 2px;
}

.text-char {
    display: inline-block;
    animation: textBounce 1.5s ease-in-out infinite;
    animation-delay: calc(var(--char-index, 0) * 0.1s);
}

.text-char:nth-child(1) { --char-index: 0; }
.text-char:nth-child(2) { --char-index: 1; }
.text-char:nth-child(3) { --char-index: 2; }
.text-char:nth-child(4) { --char-index: 3; }
.text-char:nth-child(5) { --char-index: 4; }
.text-char:nth-child(6) { --char-index: 5; }
.text-char:nth-child(7) { --char-index: 6; }
.text-char:nth-child(8) { --char-index: 7; }
.text-char:nth-child(9) { --char-index: 8; }
.text-char:nth-child(10) { --char-index: 9; }
.text-char:nth-child(11) { --char-index: 10; }

/* Progress Bar */
.progress-container {
    width: 200px;
    margin: 0 auto;
}

.progress-bar {
    width: 100%;
    height: 4px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 2px;
    overflow: hidden;
    position: relative;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1);
    background-size: 200% 100%;
    animation: progressFill 2s ease-in-out infinite, gradientMove 3s ease infinite;
    border-radius: 2px;
    width: 0%;
    animation-fill-mode: forwards;
}

.progress-glow {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 20px;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
    animation: progressGlow 2s ease-in-out infinite;
}

/* Particles */
.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.particle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    animation: particleFloat 3s ease-in-out infinite;
    animation-delay: var(--delay);
}

.particle:nth-child(1) { top: 20%; left: 10%; }
.particle:nth-child(2) { top: 60%; left: 80%; }
.particle:nth-child(3) { top: 80%; left: 20%; }
.particle:nth-child(4) { top: 30%; left: 70%; }
.particle:nth-child(5) { top: 70%; left: 30%; }
.particle:nth-child(6) { top: 40%; left: 90%; }

/* Background Elements */
.bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.bg-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    animation: bgFloat 8s ease-in-out infinite;
}

.bg-circle-1 {
    width: 100px;
    height: 100px;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.bg-circle-2 {
    width: 150px;
    height: 150px;
    top: 70%;
    right: 10%;
    animation-delay: 2s;
}

.bg-circle-3 {
    width: 80px;
    height: 80px;
    bottom: 20%;
    left: 20%;
    animation-delay: 4s;
}

/* Animations */
@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.9; }
    50% { transform: scale(1.1); opacity: 1; }
}

@keyframes pulseRing {
    0% { transform: scale(1); opacity: 1; }
    100% { transform: scale(1.5); opacity: 0; }
}

@keyframes textBounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

@keyframes progressFill {
    0% { width: 0%; }
    50% { width: 70%; }
    100% { width: 100%; }
}

@keyframes gradientMove {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes progressGlow {
    0% { left: -20px; }
    100% { left: 100%; }
}

@keyframes particleFloat {
    0%, 100% { 
        transform: translateY(0) scale(1); 
        opacity: 0.6;
    }
    50% { 
        transform: translateY(-20px) scale(1.2); 
        opacity: 1;
    }
}

@keyframes bgFloat {
    0%, 100% { 
        transform: translateY(0) translateX(0) scale(1); 
        opacity: 0.1;
    }
    33% { 
        transform: translateY(-30px) translateX(20px) scale(1.1); 
        opacity: 0.2;
    }
    66% { 
        transform: translateY(20px) translateX(-15px) scale(0.9); 
        opacity: 0.15;
    }
}

/* Dark theme support */
[data-layout-mode="dark"] .page-loader {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
}

/* Responsive */
@media (max-width: 768px) {
    .loader-logo {
        width: 60px;
        height: 60px;
        margin-bottom: 20px;
    }
    
    .loader-text {
        font-size: 18px;
        letter-spacing: 1px;
    }
    
    .progress-container {
        width: 150px;
    }
}

/* Loading states */
.page-loader.loading .logo-circle {
    animation-play-state: running;
}

.page-loader.loading .progress-fill {
    animation-play-state: running;
}

.page-loader.loading .particle {
    animation-play-state: running;
}
</style> 