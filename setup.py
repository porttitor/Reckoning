from setuptools import setup


def readme():
    with open('README.md') as f:
        return f.read()


setup(name='Reckoning',
      version='0.2.2',
      description='A lightweight python library for translating UBX packets',
      long_description=readme(),
      long_description_content_type="text/markdown",
      classifiers=[
          'Development Status :: 3 - Alpha',
          'License :: OSI Approved :: GNU General Public License v3 (GPLv3)',
          'Programming Language :: Python :: 3',
          'Topic :: Communications'
      ],
      url='http://github.com/porttitor/Reckoning',
      author='Dalymople',
      author_email='hermes.sergio@gmail.com',
      license='GNU GPL v3',
      packages=['Reckoning'],
      zip_safe=False,
      test_suite='nose.collector',
      tests_require=['nose'],
      )
